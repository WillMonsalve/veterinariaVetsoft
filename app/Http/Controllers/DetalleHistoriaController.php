<!-- <?php 

// namespace App\Http\Controllers\Admin;

// use App\Http\Controllers\Controller;
// use App\Models\DetalleHistoria;
// use Illuminate\Http\Request;

// /**
//  * Class DetalleHistoriaController
//  * @package App\Http\Controllers
//  */
// class DetalleHistoriaController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index()
//     {
//         $detalleHistorias = DetalleHistoria::paginate();

//         return view('admin.detalle-historia.index', compact('detalleHistorias'))
//             ->with('i', (request()->input('page', 1) - 1) * $detalleHistorias->perPage());
//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         $detalleHistoria = new DetalleHistoria();
//         return view('admin.detalle-historia.create', compact('detalleHistoria'));
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
//         request()->validate(DetalleHistoria::$rules);

//         $detalleHistoria = DetalleHistoria::create($request->all());

//         return redirect()->route('admin.detalle-historia.index')
//             ->with('success', 'DetalleHistoria created successfully.');
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  int $id
//      * @return \Illuminate\Http\Response
//      */
//     public function show($id)
//     {
//         $detalleHistoria = DetalleHistoria::find($id);

//         return view('admin.detalle-historia.show', compact('detalleHistoria'));
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  int $id
//      * @return \Illuminate\Http\Response
//      */
//     public function edit($id)
//     {
//         $detalleHistoria = DetalleHistoria::find($id);

//         return view('admin.detalle-historia.edit', compact('detalleHistoria'));
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request $request
//      * @param  DetalleHistoria $detalleHistoria
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, DetalleHistoria $detalleHistoria)
//     {
//         request()->validate(DetalleHistoria::$rules);

//         $detalleHistoria->update($request->all());

//         return redirect()->route('admin.detalle-historia.index')
//             ->with('success', 'DetalleHistoria updated successfully');
//     }

//     /**
//      * @param int $id
//      * @return \Illuminate\Http\RedirectResponse
//      * @throws \Exception
//      */
//     public function destroy($id)
//     {
//         $detalleHistoria = DetalleHistoria::find($id)->delete();

//         return redirect()->route('admin.detalle-historia.index')
//             ->with('success', 'DetalleHistoria deleted successfully');
//     }
// }
