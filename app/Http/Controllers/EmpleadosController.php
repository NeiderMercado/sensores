<?php

namespace App\Http\Controllers;

use App\Models\Conductor;
use App\Models\Empleados;
use App\Models\Interno;
use App\Models\Prueba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Http\Controllers\Input;
use App\Http\Controllers\DateTime;
use App\Http\Controllers\Carbon;
use App\Models\p_automotor_2021;
use App\Models\historialSoat;
use App\Models\historialRTM;
use App\Models\historialExtra;
use App\Models\historialOperacion;
use App\Models\historialFacturas;




class EmpleadosController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos5 = DB::select("select * from p_automotor_2021");     
        return view('sensores/INTERNO_CONSULTAR', compact('datos5'));
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $datos4 = DB::select('select * from prueba');
        return view('sensores.create', ['datos4' => $datos4]);


        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosEmpleado=request()->all();
        $datosEmpleado=request()->except('_token', '_method');
        if($request->hasFile('FOTO_COND')){
            
            $datosEmpleado['FOTO_COND']=$request->file('FOTO_COND')->store('fotos_conductores','public');
            
            
        }else{
            $datosEmpleado['FOTO_COND']="";
            
        }
        
        p_automotor_2021::insert($datosEmpleado);
        return redirect('gestion_humana/operativo_selint')->with('Mensaje','Bien hecho, el conductor fue agregado con exito');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function show(Empleados $empleados)
    {
        //
        return view('sensores/LIQUIDACION_VEH');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $task = Empleados::findOrFail($id);
         return view('sensores.edit');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_conductor)
    {
        //
        $datos5 = DB::select("select * from p_automotor_2021");
        $datos_p_automor=request()->all();
        $datos_p_automor=request()->except('_token', '_method', 'updated_at');
        if($request->hasFile('FOTO_COND')){
            
            $datos_p_automor['FOTO_COND']=$request->file('FOTO_COND')->store('fotos_conductores','public');
            
            

        }
        p_automotor_2021::where('CEDULA_COND','=', $id_conductor)->update($datos_p_automor);

        return redirect('gestion_humana/operativo_selint')->with('Mensaje','Bien hecho, Los datos del conductor fueron actualizado con exito');
        $task = p_automotor_2021::findOrFail($id_conductor);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $fruta = Empleados::findOrFail($id);
        $fruta -> delete();

        if(Storage::delete($fruta['Foto'])){
            Empleados::destroy($id);
        }
        

        return redirect('/sensores/index');
        
       
    }

    public function consulta(Request $request)
    {
        
        $dates = $request->input('fecha');
        $int = $request->input('interno');

         
         $user = DB::select("select Estado from prueba where fecha = '$dates' and Interno = '$int'");


        return view('sensores.inicio', compact('user'));

       
    }

    public function operacion(Request $request)
    {
        $interno_hv = $request->input('interno_hv');
        $query1 = DB::select("select * from historial_conductor where INTERNO = '$interno_hv' and ESTADO = 'ACTIVO'");
        $historial_conductor = DB::select("select * from historial_conductor where INTERNO = '$interno_hv'");
        $datos_veh = DB::select("select * from p_automotor_2021 where INTERNO = '$interno_hv'");
        $historial_soat = DB::select("select * from historial_soat where INTERNO = '$interno_hv'");
        $historial_rtm = DB::select("select * from historial_rtm where INTERNO = '$interno_hv'");
        $historial_extra = DB::select("select * from historial_extra where INTERNO = '$interno_hv'");
        $historial_operacion = DB::select("select * from historial_operacion where INTERNO = '$interno_hv'");

        return view('gestion_humana/operativo', compact('historial_soat','query1','datos_veh', 'historial_conductor', 'historial_rtm', 'historial_extra', 'historial_operacion'));

    }

    public function operacion2(Request $request)
    {
        $datos5 = DB::select("select * from p_automotor_2021");
        
        return view('gestion_humana/operativo_selint', compact('datos5'));
       
    }

    public function operacion3(Request $request)
    {
        return view('gestion_humana/operativo_crear');

       
    }

    public function operacion4(Request $request)
    {
       
        $id = $request->input('conductor_cc');
        $datos6 = DB::select("select * from historial_conductor where CEDULA_COND = '$id'");
        return view('gestion_humana/operativo_actualizar', compact('datos6'));
       
    }

    public function historial_coductor(Request $request)
    {
       
        $interno_hv = $request->input('interno_hv');
        $datos8 = DB::select("select * from historial_facturas where INTERNO = '$interno_hv'");
        $datos6 = DB::select("select * from historial_conductor where INTERNO = '$interno_hv'");
        return view('gestion_humana/historial_conductor', compact('datos6', 'datos8'));
       
    }

    public function historial_facturas(Request $request)
    {
       

       
    }

    public function nuevo_documento(Request $request)
    {
       
        return view('gestion_humana/agregar_documento');
       
    }
    
    public function nuevo_tar_operacion(Request $request)
    {
       
        return view('gestion_humana/agregar_tarjeta_operacion');
       
    }

    public function fuct_mantenimeinto(Request $request)
    {
       
        return view('gestion_humana/agregar_facturas');
       
    }

    public function nuevo_extra_contra(Request $request)
    {
       
        return view('gestion_humana/agregar_extra_y_contra');
       
    }

    public function add_documento(Request $request)
    {
       
       $datosDocumentos=request()->all();
       $datosDocumentos=request()->except('_token', '_method', 'DOCUMENTO');
       $documento = $request->input('DOCUMENTO');
       $documento1 = $request->input('TIPO_DE_POLIZA');
       $documento2 = $request->input('TIPO_DE_POLIZA');


       if ($documento == "SEGURO OBLIGATORIO") {
        historialSoat::insert($datosDocumentos);
       }

       elseif ($documento == "REVISIÓN TÉCNICO MECÁNICA") {
        historialRTM::insert($datosDocumentos);
       }

       elseif ($documento1 == "Responsabilidad Civil Contractual") {
        historialExtra::insert($datosDocumentos);
       }  
       elseif ($documento1 == "Responsabilidad Civil Extracontractual") {
        historialExtra::insert($datosDocumentos);
       }
       elseif ($documento == "TARJETA DE OPERACIÓN") {
        historialOperacion::insert($datosDocumentos);
       }
       elseif ($documento2 == "PREVENTIVA, CORRECTIVA") {
        historialFacturas::insert($datosDocumentos);
       }

       
       return redirect('gestion_humana/operativo_selint')->with('Mensaje','Bien hecho, el conductor fue agregado con exito');
       
    }

    public function CONSULTAR_DESPACHOS(Request $request)
    {
        $interno_hv = $request->input('interno_hv');
        $DESPACHOS = DB::select("SELECT * FROM `despachos` WHERE `PLACA` = '$interno_hv'");     
        return view('sensores/LIQUIDACION_VEH', compact('DESPACHOS'));
   
    }

    public function SUMAR_INGRESOS(Request $request)
    {
        $PLACA = $request->input('DESPACHO_PLACA');
        $DESPACHO_ID = $request->input('DESPACHO_ID');
        $DESPACHO_RUTA = $request->input('DESPACHO_RUTA');
        $DESPACHO_INICIO = $request->input('DESPACHO_INICIO');
        $DESPACHO_FIN = $request->input('DESPACHO_FIN');    
        return $DESPACHOS = DB::select("select VEHICULO, RUTA, INGRESOS from `07-04-21` where `VEHICULO` like '%$PLACA%' && `FECHA_HORA` BETWEEN 'DESPACHO_INICIO' AND 'DESPACHO_FIN' ");     
        return view('sensores/LIQUIDACION_VEH', compact('DESPACHOS'));
   
    }
    
    public function facturas(Request $request)
    {
        $interno = $request->input('interno');
         $datos8 = DB::select("select * from historial_facturas where INTERNO = '$interno'");
        return view('gestion_humana/visualizar_facturas', compact( 'datos8'));

   
    }



}
