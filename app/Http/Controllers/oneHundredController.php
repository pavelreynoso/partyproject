<?php
    namespace App\Http\Controllers;

    use App\Http\Requests\oneHundredRequest;
    use App\oneHundred;

    class oneHundredController extends Controller
    {
        public function index()
        {
            $onehundreds = oneHundred::latest()->get();
            return response()->json($onehundreds);
        }
        public function store(oneHundredRequest $request)
        {
            $onehundred = oneHundred::create($request->all());
            return response()->json($onehundred, 201);
        }
        public function show($id)
        {
            $onehundred = oneHundred::findOrFail($id);
            return response()->json($onehundred);
        }
        public function update(oneHundredRequest $request, $id)
        {
            $onehundred = oneHundred::findOrFail($id);
            $onehundred->update($request->all());
            return response()->json($onehundred, 200);
        }
        public function destroy($id)
        {
            oneHundred::destroy($id);
            return response()->json(null, 204);
        }
    }
