<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App;

class PagesController extends Controller
{
    //Login
    public function Login(){
        return view('login');
    }

    public function Inicio(){
        return view('inicio');
    }

    public function Joshua(){
        return view('joshua');
    }
   
    //Productos
    public function Producto(){
        $item_producto = App\Producto::paginate(5);

        return view('producto', compact('item_producto'));
    }

    //Productos Detalles
    public function Producto_Detalle($id){
        $producto = App\Producto::findOrFail($id);

        return view('producto.producto_detalle', compact('producto'));
    }

    //Productos Agregar
    public function Producto_Agregar(){

        return view('producto.producto_agregar');
    }

    //Productos Crear
    public function Producto_Crear(Request $request){
        //return $request->all();

        $request->validate([
            'codigo_producto' => 'required',
            'nombre_producto' => 'required',
            'empresa_producto' => 'required',
            'ubicacion_producto' => 'required',
            'periocidad_producto' => 'required',
            'tipo_producto' => 'required',
            'celular_producto' => 'required',            
            
        ]);

        $nuevo_producto = new App\Producto;
        $nuevo_producto->codigo_producto = $request->codigo_producto;        
        $nuevo_producto->nombre_producto = $request->nombre_producto;
        $nuevo_producto->empresa_producto = $request->empresa_producto;
        $nuevo_producto->ubicacion_producto = $request->ubicacion_producto;
        $nuevo_producto->periocidad_producto = $request->periocidad_producto;
        $nuevo_producto->tipo_producto = $request->tipo_producto;
        $nuevo_producto->celular_producto = $request->celular_producto;
        $nuevo_producto->hora_inicio_producto = $request->hora_inicio_producto;
        $nuevo_producto->hora_fin_producto = $request->hora_fin_producto;

        $extension = $request->file('imagen_producto')->getClientOriginalExtension();

        $file_name = $nuevo_producto->codigo_producto.'.'.$extension;

        Image::make($request->file('imagen_producto'))
            ->save('img/productos/'.$file_name);

        $nuevo_producto->imagen_producto = $extension;

       /* if($request->hasfile('imagen_producto'))
         {
            foreach($request->file('imagen_producto') as $imagen)
            {
                $name = $imagen->getClientOriginalName();
                $imagen->move(public_path().'/images/', $name);  
                $data[] = $name;                
            }
         }

        $nuevo_producto->imagen_producto=json_encode($data);*/

        $nuevo_producto->save();
         
        return back()->with('mensaje_producto', 'Se agrego correctamente');
    }

    public function Producto_Editar($id){
        $producto_editar = App\Producto::findOrFail($id);

        return view('producto.producto_editar', compact('producto_editar'));
    }

    public function Producto_Actualizar(Request $request, $id){

        $producto_actualizar = app\Producto::findOrFail($id);

        $producto_actualizar->codigo_producto = $request->codigo_producto;        
        $producto_actualizar->nombre_producto = $request->nombre_producto;
        $producto_actualizar->empresa_producto = $request->empresa_producto;
        $producto_actualizar->ubicacion_producto = $request->ubicacion_producto;
        $producto_actualizar->periocidad_producto = $request->periocidad_producto;
        $producto_actualizar->tipo_producto = $request->tipo_producto;
        $producto_actualizar->celular_producto = $request->celular_producto;
        $producto_actualizar->hora_inicio_producto = $request->hora_inicio_producto;
        $producto_actualizar->hora_fin_producto = $request->hora_fin_producto;

        $producto_actualizar->save();

        return back()->with('mensaje', 'Logrado');
    }

    public function Producto_Eliminar($id){

        $producto_eliminar = App\Producto::findOrFail($id);

        $producto_eliminar->delete();

        return back()->with('mensaje', 'Eliminado');
    }


    //Clientes
    public function Cliente(){
        $item_cliente = App\Cliente::paginate(5);

        return view('cliente', compact('item_cliente'));
    }

    public function Cliente_Detalle($id){
        $cliente = App\Cliente::findOrFail($id);

        return view('cliente.cliente_detalle', compact('cliente'));
    }

    public function Cliente_Agregar(){

        return view('cliente.cliente_agregar');
    }

    public function Cliente_Crear(Request $request){
        //return $request->all();

        $request->validate([
            'codigo_cliente' => 'required',
        ]);

        $nuevo_cliente = new App\Cliente;
        $nuevo_cliente->codigo_cliente = $request->codigo_cliente;        
        $nuevo_cliente->nombre_cliente = $request->nombre_cliente;
        $nuevo_cliente->sexo_cliente = $request->sexo_cliente;
        $nuevo_cliente->empresa_cliente = $request->empresa_cliente;
        $nuevo_cliente->edad_cliente = $request->edad_cliente;
        $nuevo_cliente->correo_cliente = $request->correo_cliente;
        $nuevo_cliente->direccion_cliente = $request->direccion_cliente;
        $nuevo_cliente->celular_cliente = $request->celular_cliente;

        $nuevo_cliente->save();

        return back()->with('mensaje_cliente', 'Se agrego correctamente');
    }

    public function Cliente_Editar($id){
        $cliente_editar = App\Cliente::findOrFail($id);

        return view('cliente.cliente_editar', compact('cliente_editar'));
    }

    public function Cliente_Actualizar(Request $request, $id){

        $cliente_actualizar = app\Cliente::findOrFail($id);

        $cliente_actualizar->codigo_cliente = $request->codigo_cliente;        
        $cliente_actualizar->nombre_cliente = $request->nombre_cliente;
        $cliente_actualizar->sexo_cliente = $request->sexo_cliente;
        $cliente_actualizar->empresa_cliente = $request->empresa_cliente;
        $cliente_actualizar->edad_cliente = $request->edad_cliente;
        $cliente_actualizar->correo_cliente = $request->correo_cliente;
        $cliente_actualizar->direccion_cliente = $request->direccion_cliente;
        $cliente_actualizar->celular_cliente = $request->celular_cliente;

        $cliente_actualizar->save();

        return back()->with('mensaje', 'Logrado');

    }

    public function Cliente_Eliminar($id){

        $cliente_eliminar = App\Cliente::findOrFail($id);

        $cliente_eliminar->delete();

        return back()->with('mensaje', 'Eliminado');
    }


    //Usuario
    public function Usuario(){
        $item_usuario = App\Usuario::paginate(5);

        return view('usuario', compact('item_usuario'));
    }

    public function Usuario_Detalle($id){
        $usuario = App\Usuario::findOrFail($id);

        return view('usuario.usuario_detalle', compact('usuario'));
    }

    public function Usuario_Agregar(){
        return view('usuario.usuario_agregar');
    }

    public function Usuario_Crear(Request $request){

        $request->validate([
            'codigo_usuario' => 'required',
            'nombre_usuario' => 'required',
            'sexo_usuario' => 'required',
            'edad_usuario' => 'required',
            'correo_usuario' => 'required',
            'contraseña_usuario' => 'required',
            'tipo_usuario' => 'required',
        ]);

        $nuevo_usuario = new App\Usuario;
        $nuevo_usuario->codigo_usuario = $request->codigo_usuario;        
        $nuevo_usuario->nombre_usuario = $request->nombre_usuario;
        $nuevo_usuario->sexo_usuario = $request->sexo_usuario;
        $nuevo_usuario->edad_usuario = $request->edad_usuario;
        $nuevo_usuario->correo_usuario = $request->correo_usuario;
        $nuevo_usuario->contraseña_usuario = $request->contraseña_usuario;
        $nuevo_usuario->tipo_usuario = $request->tipo_usuario;
  
        $nuevo_usuario->save();

        return back()->with('mensaje_usuario', 'Se agrego correctamente');
        
    }

    public function Usuario_Editar($id){
        $usuario_editar = App\Usuario::findOrFail($id);

        return view('usuario.usuario_editar', compact('usuario_editar'));
    }

    public function Usuario_Actualizar(Request $request, $id){

        $usuario_actualizar = app\Usuario::findOrFail($id);

        $usuario_actualizar->codigo_usuario = $request->codigo_usuario;        
        $usuario_actualizar->nombre_usuario = $request->nombre_usuario;
        $usuario_actualizar->sexo_usuario = $request->sexo_usuario;
        $usuario_actualizar->edad_usuario = $request->edad_usuario;
        $usuario_actualizar->correo_usuario = $request->correo_usuario;
        $usuario_actualizar->contraseña_usuario = $request->contraseña_usuario;
        $usuario_actualizar->tipo_usuario = $request->tipo_usuario;
  
        $usuario_actualizar->save();

        return back()->with('mensaje_usuario', 'Se agrego correctamente');

    }

    public function Usuario_Eliminar($id){

        $usuario_eliminar = App\Usuario::findOrFail($id);

        $usuario_eliminar->delete();

        return back()->with('mensaje', 'Eliminado');
    }


}
