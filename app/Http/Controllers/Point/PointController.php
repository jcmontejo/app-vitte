<?php

namespace App\Http\Controllers\Point;

use App\Http\Controllers\Controller;
use App\Models\Evidence;
use App\Models\PhotoEvidence;
use App\Models\Point;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class PointController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $page_title = 'Puntos';
        $message = $request->session()->get('message');
        $users = User::whereHas('type', function ($query) {
            $query->where('strTypeUser', 'Usuario Campo');
        })->get();

        $params = [
            'page_title',
            'message',
            'request',
            'users'
        ];
        return view('points.index', compact($params));
    }

    public function getData(Request $request)
    {
        $datas = Point::all();

        return DataTables::of($datas)
            ->addColumn('action', function ($datas) {
                $html = '<div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-h"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item edit-aval" onclick="_resource.edit(' .
                    $datas->id .
                    ')"><i class="fas fa-pencil-alt"></i> Editar</a>
                    <a href="#" class="dropdown-item delete-aval" onclick="_resource.edit(' .
                    $datas->id .
                    ')"><i class="fas fa-trash-alt"></i>
                        Eliminar</a>
                </div>
            </div>';
                return $html;
            })
            ->make(true);
    }

    public function store(Request $request)
    {
        $point = new Point();
        $point->name = $request->name;
        $point->address = $request->address;
        $point->latitude = $request->latitude;
        $point->longitude = $request->longitude;
        $point->user_id = $request->user_id;
        $point->created_by = Auth::user()->id;
        $point->status = ($point->user_id > 0) ? 'asignado' : 'pendiente';
        $point->save();

         // Guardar la evidencia
        $evidence = new Evidence;
        $evidence->point_id = $point->id;
        $evidence->content = '';
        $evidence->save();

        return response()->json('success');
    }

    public function edit($id)
    {
        $point = Point::find($id);
        $evidence = Evidence::where('point_id', $point->id)->first();
        $attachments = [];
        if($evidence){
            $attachments = PhotoEvidence::where('evidence_id', $evidence->id)
            ->join('evidences', 'evidences.id', 'photo_evidences.evidence_id')
            ->join('points', 'points.id', 'evidences.point_id')
            ->join('users', 'users.id', 'points.user_id')
            ->select(
                'photo_evidences.photo_path as path',
                'photo_evidences.created_at as created_at',
                DB::raw("CONCAT(users.name, ' ', users.strLastName) AS fullname")
            )
            ->get()
            ->map(function ($file){
                return [
                    'path' => asset($file->path),
                    'created_at' => $file->created_at,
                    'fullname' => $file->fullname
                ];
            });
        }
        return response()->json(['point'=>$point, 'evidence'=>$evidence, 'attachments'=>$attachments]);
    }

    public function update(Request $request, $id)
    {
        $point = Point::find($id);
        $point->name = $request->name;
        $point->address = $request->address;
        $point->latitude = $request->latitude;
        $point->longitude = $request->longitude;
        $point->user_id = $request->user_id;
        $point->created_by = Auth::user()->id;
        $point->status = ($point->user_id > 0) ? 'asignado' : 'pendiente';
        $point->save();

        return response()->json('success');
    }
}
