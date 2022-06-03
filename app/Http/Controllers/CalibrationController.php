<?php

namespace App\Http\Controllers;

use App\Models\Calibration;
use Illuminate\Http\Request;

/**
 * Class CalibrationController
 * @package App\Http\Controllers
 */
class CalibrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calibrations = Calibration::paginate();

        return view('calibration.index', compact('calibrations'))
            ->with('i', (request()->input('page', 1) - 1) * $calibrations->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $calibration = new Calibration();
        return view('calibration.create', compact('calibration'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Calibration::$rules);

        $request->description = "Editado";
        $calibration = Calibration::create($request->all());

        return redirect()->route('calibrations.index')
            ->with('success', 'Calibration created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $calibration = Calibration::find($id);

        return view('calibration.show', compact('calibration'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $calibration = Calibration::find($id);

        return view('calibration.edit', compact('calibration'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Calibration $calibration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Calibration $calibration)
    {
        request()->validate(Calibration::$rules);

        $calibration->update($request->all());

        return redirect()->route('calibrations.index')
            ->with('success', 'Calibration updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $calibration = Calibration::find($id)->delete();

        return redirect()->route('calibrations.index')
            ->with('success', 'Calibration deleted successfully');
    }
}
