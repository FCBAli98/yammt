<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuRequest;
use App\Repositories\MenuRepository;
use Illuminate\Http\Request;

class MenuController extends Controller
{

    protected $repo;
    public function __construct(MenuRepository $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'models' => $this->repo->getIndex()->appends(\request()->except('page')),
            'languages' => $this->repo->getLocaleListForLangParam()
        ];
        return view('admin.menu.index', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'languages' => $this->repo->getLanguagesArr()
        ];
        return view('admin.menu.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuRequest $request)
    {
        $result = $this->repo->create($request->validated());
        if ($result){
            toastr()->success('Maʼlumotlar muvaffaqiyatli saqlandi!');
            return back();
        }else{
            toastr()->error('Maʼlumotlar muvaffaqiyatli saqlanmadi!');
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $model = $this->repo->findById($id);
        $data = [
          'models' => $model,
          'languages' => $this->repo->getLanguagesArr()
        ];

        return view('admin.menu.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MenuRequest $request, $id)
    {
        $result = $this->repo->update($id, $request->validated());
        if ($result)
        {
            toastr()->success( 'Success');
            return back();
//            return redirect()->route('menu.index');
        }else {
            toastr()->error( 'Errors');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
    }
}
