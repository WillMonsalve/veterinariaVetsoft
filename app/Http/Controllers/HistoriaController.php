<!-- <?php 

// namespace App\Http\Controllers\Admin;

// use App\Http\Controllers\Controller;
// use App\Models\Historia;
// use Illuminate\Http\Request;

// /**
//  * Class HistoriaController
//  * @package App\Http\Controllers
//  */
// class HistoriaController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index()
//     {
//         $historias = Historia::paginate();

//         return view('admin.historia.index', compact('historias'))
//             ->with('i', (request()->input('page', 1) - 1) * $historias->perPage());
//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         $historia = new Historia();
//         return view('admin.historia.create', compact('historia'));
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
//         request()->validate(Historia::$rules);

//         $historia = Historia::create($request->all());

//         return redirect()->route('admin.historia.index')
//             ->with('success', 'Historia created successfully.');
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  int $id
//      * @return \Illuminate\Http\Response
//      */
//     public function show($id)
//     {
//         $historia = Historia::find($id);

//         return view('admin.historia.show', compact('historia'));
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  int $id
//      * @return \Illuminate\Http\Response
//      */
//     public function edit($id)
//     {
//         $historia = Historia::find($id);

//         return view('admin.historia.edit', compact('historia'));
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request $request
//      * @param  Historia $historia
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, Historia $historia)
//     {
//         request()->validate(Historia::$rules);

//         $historia->update($request->all());

//         return redirect()->route('admin.historia.index')
//             ->with('success', 'Historia updated successfully');
//     }

//     /**
//      * @param int $id
//      * @return \Illuminate\Http\RedirectResponse
//      * @throws \Exception
//      */
//     public function destroy($id)
//     {
//         $historia = Historia::find($id)->delete();

//         return redirect()->route('admin.historia.index')
//             ->with('success', 'Historia deleted successfully');
//     }
// }
