<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyWalletRequest;
use App\Http\Requests\StoreWalletRequest;
use App\Http\Requests\UpdateWalletRequest;
use App\Models\Play;
use App\Models\User;
use App\Models\Wallet;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class WalletController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('wallet_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $wallets = Wallet::with(['user', 'play'])->get();

        return view('admin.wallets.index', compact('wallets'));
    }

    public function create()
    {
        abort_if(Gate::denies('wallet_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $plays = Play::pluck('type', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.wallets.create', compact('plays', 'users'));
    }

    public function store(StoreWalletRequest $request)
    {
        $wallet = Wallet::create($request->all());

        return redirect()->route('admin.wallets.index');
    }

    public function edit(Wallet $wallet)
    {
        abort_if(Gate::denies('wallet_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $plays = Play::pluck('type', 'id')->prepend(trans('global.pleaseSelect'), '');

        $wallet->load('user', 'play');

        return view('admin.wallets.edit', compact('plays', 'users', 'wallet'));
    }

    public function update(UpdateWalletRequest $request, Wallet $wallet)
    {
        $wallet->update($request->all());

        return redirect()->route('admin.wallets.index');
    }

    public function show(Wallet $wallet)
    {
        abort_if(Gate::denies('wallet_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $wallet->load('user', 'play');

        return view('admin.wallets.show', compact('wallet'));
    }

    public function destroy(Wallet $wallet)
    {
        abort_if(Gate::denies('wallet_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $wallet->delete();

        return back();
    }

    public function massDestroy(MassDestroyWalletRequest $request)
    {
        $wallets = Wallet::find(request('ids'));

        foreach ($wallets as $wallet) {
            $wallet->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
