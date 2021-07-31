<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    // index
    public function index()
    {
        $cars = Car::all();
        return view('carindex', compact('cars'));
    }

    // create
    public function create()
    {
        return view('carcreate');
    }

    // store
    public function store(Request $request)
    {
        $car = new Car();
        $car->carcompany = $request->get('carcompany');
        $car->model = $request->get('model');
        $car->price = $request->get('price');
        $car->save();
        return redirect('car')->with('success', 'Car has been succesfully added');
    }

    // edit
    public function edit($id)
    {
        $car = Car::find($id);
        return view('caredit', compact('car', 'id'));
    }

    // update
    public function update(Request $request, $id)
    {
        $car = Car::find($id);
        $car->carcompany = $request->get('carcompany');
        $car->model = $request->get('model');
        $car->price = $request->get('price');
        $car->save();
        return redirect('car')->with('success', 'Car has been succesfully update');
    }

    // destroy
    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();
        return redirect('car')->with('success', 'Car has been deleted');
    }
}
