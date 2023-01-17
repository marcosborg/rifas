<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Number;
use App\Models\Play;
use App\Models\Star;
use App\Models\StarPlay;
use App\Models\SubCategory;
use App\Models\Entity;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Laravel\Sanctum\PersonalAccessToken;
use Illuminate\Database\Eloquent\Builder;

class GamesController extends Controller
{
    public function getActiveGames(Request $request)
    {

        $now = Carbon::now();

        //STARS
        $stars = Star::where('start_date', '<=', $now)
            ->where('end_date', '>=', $now)
            ->orderBy('id', 'DESC')
            ->first();
        //NUMBERS
        $numbers = Number::where('start_date', '<=', $now)
            ->where('end_date', '>=', $now)
            ->orderBy('id', 'DESC')
            ->first();

        $games = collect([
            'stars' => $stars,
            'numbers' => $numbers
        ]);
        return $games;
    }

    public function getStarsGame(Request $request)
    {

        $stars = Star::where('id', $request->id)
            ->with([
                'award',
                'benefectors'
            ])
            ->first();
        return $stars;
    }

    public function checkStars(Request $request)
    {
        $stars = Star::where('id', $request->id)
            ->with([
                'starPlays'
            ])
            ->first();
        $starsUnavailable = [];
        foreach ($stars->starPlays as $starPlay) {
            $plays = Play::where('play', $starPlay->id)
                ->where('selection', $request->star)
                ->get();
            foreach ($plays as $play) {
                $unavailablePlay = Play::where('play', $starPlay->id)
                    ->where('selection', '!=', $request->star)
                    ->first();
                $starsUnavailable[] = $unavailablePlay->selection;
            }
        }
        return $starsUnavailable;
    }

    public function saveStars(Request $request)
    {

        $bearerToken = $request->bearerToken();
        $token = PersonalAccessToken::findToken($bearerToken);
        $user = $token->tokenable;

        $starPlay = new StarPlay;
        $starPlay->user_id = $user->id;
        $starPlay->star_id = $request->id;
        $starPlay->save();

        $play1 = new Play;
        $play1->type = 1;
        $play1->play = $starPlay->id;
        $play1->selection = $request->star1;
        $play1->save();

        $play2 = new Play;
        $play2->type = 1;
        $play2->play = $starPlay->id;
        $play2->selection = $request->star2;
        $play2->save();
    }

    public function checkCart(Request $request)
    {
        $bearerToken = $request->bearerToken();
        $token = PersonalAccessToken::findToken($bearerToken);
        $user = $token->tokenable;

        $now = Carbon::now();

        $starPlays = StarPlay::where([
            'user_id' => $user->id,
            'payed' => false,
        ])
            ->with([
                'plays',
                'star.award'
            ])
            ->whereHas('star', function (Builder $query) use ($now) {
                $query->where('start_date', '<=', $now);
                $query->where('end_date', '>=', $now);
            })
            ->get();

        $total = 0;

        foreach ($starPlays as $starPlay) {
            $price = $starPlay->star->donation;
            $total = $total + $price;
        }

        return [
            'starPlays' => $starPlays,
            'total' => $total,
        ];
    }

    public function deleteStarItem(Request $request)
    {
        return StarPlay::find($request->id)->delete();
    }

    public function deleteAllFromCart(Request $request)
    {
        $bearerToken = $request->bearerToken();
        $token = PersonalAccessToken::findToken($bearerToken);
        $user = $token->tokenable;
        return StarPlay::where([
            'user_id' => $user->id,
            'payed' => false
        ])->delete();
    }

    public function getEntityCategories(Request $request)
    {
        return Category::all();
    }

    public function getEntitySubCategories(Request $request)
    {
        return SubCategory::where('category_id', $request->id)->get();
    }

    public function getEntities(Request $request)
    {
        return Entity::where('sub_category_id', $request->id)->get();
    }

    public function lastGames(Request $request)
    {
        return Star::with('award')->get();
    }
}