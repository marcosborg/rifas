<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyEntityRequest;
use App\Http\Requests\StoreEntityRequest;
use App\Http\Requests\UpdateEntityRequest;
use App\Models\Entity;
use App\Models\SubCategory;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class EntityController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('entity_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Entity::with(['sub_category'])->select(sprintf('%s.*', (new Entity())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'entity_show';
                $editGate = 'entity_edit';
                $deleteGate = 'entity_delete';
                $crudRoutePart = 'entities';

                return view('partials.datatablesActions', compact(
                'viewGate',
                'editGate',
                'deleteGate',
                'crudRoutePart',
                'row'
            ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : '';
            });
            $table->addColumn('sub_category_name', function ($row) {
                return $row->sub_category ? $row->sub_category->name : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'sub_category']);

            return $table->make(true);
        }

        return view('admin.entities.index');
    }

    public function create()
    {
        abort_if(Gate::denies('entity_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sub_categories = SubCategory::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.entities.create', compact('sub_categories'));
    }

    public function store(StoreEntityRequest $request)
    {
        $entity = Entity::create($request->all());

        return redirect()->route('admin.entities.index');
    }

    public function edit(Entity $entity)
    {
        abort_if(Gate::denies('entity_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sub_categories = SubCategory::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $entity->load('sub_category');

        return view('admin.entities.edit', compact('entity', 'sub_categories'));
    }

    public function update(UpdateEntityRequest $request, Entity $entity)
    {
        $entity->update($request->all());

        return redirect()->route('admin.entities.index');
    }

    public function show(Entity $entity)
    {
        abort_if(Gate::denies('entity_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $entity->load('sub_category');

        return view('admin.entities.show', compact('entity'));
    }

    public function destroy(Entity $entity)
    {
        abort_if(Gate::denies('entity_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $entity->delete();

        return back();
    }

    public function massDestroy(MassDestroyEntityRequest $request)
    {
        Entity::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
