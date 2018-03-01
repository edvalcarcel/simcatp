@extends('layouts.app2')


@section('content')

@endsection

@section('script')

                  <script>
			/******************************* variables *******************/
			//Preparamos el render
			var Render=new THREE.WebGLRenderer({ antialias: true });
			Render.shadowMapEnabled = true;
			//El escenario
			var Escenario=new THREE.Scene();
			var teclado=new THREEx.KeyboardState();
			// la Figura 
			var Figura;
			var controls;
			var Ancho=800;
			var Alto=800;
			
			var Angulo = 45;	
			var Aspecto=Ancho/Alto;
			var cerca=0.1;
			var lejos=10000;

			//La cámara
			var Camara=new THREE.PerspectiveCamera(Angulo,Aspecto,cerca,lejos);
			THREEx.WindowResize(Render, Camara);
			
			/******************************* inicio *******************/
			function inicio(){
					//Tamaño del render(resultado)
					Render.setSize(Ancho,Alto);
					//Se agrega el render al documento html
					document.getElementById('render').appendChild(Render.domElement);
					//Acercamos la cámara en z es profundidad para ver el punto
					Camara.position.z=200;
					Camara.position.y=200;
					//agregando la cámara al escenario
					Escenario.add(Camara);
					// agregamos todo el escenario y la cámara al render
					controls=new THREE.OrbitControls(Camara,Render.domElement);
			}

			function crear_plano(){
					//Geometría del plano
					Geometria_plano=new THREE.PlaneGeometry(100,100,10,10);
					//Textura
					Textura_plano=new THREE.ImageUtils.loadTexture("texturas/cesped.jpg");
					Textura_plano.wrapS=Textura_plano.wrapT=THREE.RepeatWrapping;
					Textura_plano.repeat.set(10,10);
					// Material y agregado la textura
					Material_plano=new THREE.MeshBasicMaterial({map:Textura_plano,side:THREE.DoubleSide});
					// El plano (Territorio)
					Territorio=new THREE.Mesh(Geometria_plano,Material_plano);
					Territorio.rotation.x=Math.PI/2;
				
					
				//	Escenario.add(Territorio);
					Axis=new THREE.AxisHelper(100,100,100);
					Escenario.add(Axis);
			}
			crear_plano();
			// cargar nuevos modelos
			
			
			function animacion(){
					
					requestAnimationFrame(animacion);
					render_modelo();
					
					tiempo=0.01;
					distancia=100;
					recorrido=distancia*tiempo;
					
					obj_mov=ModeloFinal;
					
					if(teclado.pressed("up")){
						obj_mov.position.z+=recorrido;
						
					}
					if(teclado.pressed("down")){
						obj_mov.position.z-=recorrido;
					}
					if(teclado.pressed("left")){
						obj_mov.position.x+=recorrido;
					}
					if(teclado.pressed("right")){
						obj_mov.position.x-=recorrido;
					}
					
					
					
					tiempo_rotacion=0.001;
					distancia=100;
					recorrido_rotacion=distancia*tiempo_rotacion;
					
					
					if(teclado.pressed("z")){
						obj_mov.rotation.z+=recorrido_rotacion;
					}
					if(teclado.pressed("x")){
						obj_mov.rotation.x+=recorrido_rotacion;
					}
					if(teclado.pressed("y")){
						obj_mov.rotation.y+=recorrido_rotacion;
					}
					
					if(teclado.pressed("a")){
						obj_mov.scale.x+=recorrido_rotacion;
					}
					if(teclado.pressed("s")){
						obj_mov.scale.y+=recorrido_rotacion;
					}
					if(teclado.pressed("d")){
						obj_mov.scale.z+=recorrido_rotacion;
					}
					
					
					if(teclado.pressed("q")){
						obj_mov.scale.x-=recorrido_rotacion;
					}
					if(teclado.pressed("w")){
						obj_mov.scale.y-=recorrido_rotacion;
					}
					if(teclado.pressed("e")){
						obj_mov.scale.z-=recorrido_rotacion;
						console.log(controls);
						
					}
					controls.target.set(obj_mov.position.x,obj_mov.position.y,obj_mov.position.z);
					
					/*
					//rotar
					mallaCubo.rotation.x+=recorrido;
					mallaCubo.rotation.y+=recorrido;
					mallaCubo.rotation.z+=recorrido;
					
					// escalar
					mallaCubo.scale.x+=recorrido*0.1;
					mallaCubo.scale.y+=recorrido*0.1;
					mallaCubo.scale.z+=recorrido*0.1;
					
					//traslación
					mallaCubo.position.x+=0.1;
					
					mallaCubo.rotation.x=Math.PI/3;
					*/
					
					
			}
			function render_modelo(){
					controls.update();
					Render.render(Escenario,Camara);
			}
			/**************************llamado a las funciones ******************/
			
			Modelo3DDAE=new THREE.ColladaLoader();
			Modelo3DDAE.load("PISO 30.dae",AgregarDae);
			Modelo3DDAE.load("PISO 30.dae",AgregarDae2);
			Modelo3DDAE.load("PISO 30.dae",AgregarDae3);
			Modelo3DDAE.load("PISO 30.dae",AgregarDae4);
			Modelo3DDAE.load("PISO 30.dae",AgregarDae5);
			Modelo3DDAE.load("PISO 30.dae",AgregarDae6);
			Modelo3DDAE.load("PISO 30.dae",AgregarDae7);
			Modelo3DDAE.load("PISO 30.dae",AgregarDae8);
			Modelo3DDAE.load("PISO 30.dae",AgregarDae9);
			
			function AgregarDae(infodae){
			
				modeloDaeFinal=infodae.scene;
				modeloDaeFinal.position.set(0,0,0);
				modeloDaeFinal.scale.x=modeloDaeFinal.scale.y=modeloDaeFinal.scale.z=.5;
				modeloDaeFinal.rotation.y=0;
				Escenario.add(modeloDaeFinal);
			
			}
			function AgregarDae2(infodae){
			
				modeloDaeFinal=infodae.scene;
				modeloDaeFinal.position.set(0,7.1,0);
				modeloDaeFinal.scale.x=modeloDaeFinal.scale.y=modeloDaeFinal.scale.z=.5;
				modeloDaeFinal.rotation.y=0;
				Escenario.add(modeloDaeFinal);
			
			}


			function AgregarDae3(infodae){
			
				modeloDaeFinal=infodae.scene;
				modeloDaeFinal.position.set(28,28.4,0);
				modeloDaeFinal.scale.x=modeloDaeFinal.scale.y=modeloDaeFinal.scale.z=.5;
				modeloDaeFinal.rotation.y=0;
				Escenario.add(modeloDaeFinal);
			
			}
			function AgregarDae4(infodae){
			
				modeloDaeFinal=infodae.scene;
				modeloDaeFinal.position.set(28,35.5,0);
				modeloDaeFinal.scale.x=modeloDaeFinal.scale.y=modeloDaeFinal.scale.z=.5;
				modeloDaeFinal.rotation.y=0;
				Escenario.add(modeloDaeFinal);
			
			}
			function AgregarDae5(infodae){
			
				modeloDaeFinal=infodae.scene;
				modeloDaeFinal.position.set(28,42.6,0);
				modeloDaeFinal.scale.x=modeloDaeFinal.scale.y=modeloDaeFinal.scale.z=.5;
				modeloDaeFinal.rotation.y=0;
				Escenario.add(modeloDaeFinal);
			
			}
			function AgregarDae6(infodae){
			
				modeloDaeFinal=infodae.scene;
				modeloDaeFinal.position.set(28,21.3,0);
				modeloDaeFinal.scale.x=modeloDaeFinal.scale.y=modeloDaeFinal.scale.z=.5;
				modeloDaeFinal.rotation.y=0;
				Escenario.add(modeloDaeFinal);
			
			}
			function AgregarDae7(infodae){
			
				modeloDaeFinal=infodae.scene;
				modeloDaeFinal.position.set(28,14.2,0);
				modeloDaeFinal.scale.x=modeloDaeFinal.scale.y=modeloDaeFinal.scale.z=.5;
				modeloDaeFinal.rotation.y=0;
				Escenario.add(modeloDaeFinal);
			
			}
			function AgregarDae8(infodae){
			
				modeloDaeFinal=infodae.scene;
				modeloDaeFinal.position.set(28,7.1,0);
				modeloDaeFinal.scale.x=modeloDaeFinal.scale.y=modeloDaeFinal.scale.z=.5;
				modeloDaeFinal.rotation.y=0;
				Escenario.add(modeloDaeFinal);
			
			}
			function AgregarDae9(infodae){
			
				modeloDaeFinal=infodae.scene;
				modeloDaeFinal.position.set(28,0,0);
				modeloDaeFinal.scale.x=modeloDaeFinal.scale.y=modeloDaeFinal.scale.z=.5;
				modeloDaeFinal.rotation.y=0;
				Escenario.add(modeloDaeFinal);
			
			}


			Luz();
			function Luz(){
			var luz = new THREE.PointLight(0xffffff);
			luz.position.set(-100,200,100);
			Escenario.add(luz);
			//luz de ambiente
			var Luzambiente = new THREE.AmbientLight(0x000000);
			Escenario.add(Luzambiente);
			// más luz
			var sunlight = new THREE.DirectionalLight();
			sunlight.position.set(500, 500, -500);
			sunlight.intensity = 1.3;
			sunlight.castShadow = false;
			sunlight.shadowCameraVisible = true;
			sunlight.shadowCameraNear = 250;
			sunlight.shadowCameraFar = 20000;
			sunlight.shadowCameraLeft = -200;
			sunlight.shadowCameraRight = 200;
			sunlight.shadowCameraTop = 200;
			sunlight.shadowCameraBottom = -200;
			Escenario.add(sunlight);

}

			inicio();
			animacion();
	

			function agregar(){
				alert("Hola");
			Modelo3DDAE=new THREE.ColladaLoader();
			Modelo3DDAE.load("PISO 30.dae",AgregarDae);
			Modelo3DDAE.load("PISO 30.dae",AgregarDae2);
		

			
			function AgregarDae(infodae){
			
				modeloDaeFinal=infodae.scene;
				modeloDaeFinal.position.set(14,14.2,0);
				modeloDaeFinal.scale.x=modeloDaeFinal.scale.y=modeloDaeFinal.scale.z=.5;
				modeloDaeFinal.rotation.y=0;
				Escenario.add(modeloDaeFinal);
			
			}
			function AgregarDae2(infodae){
			
				modeloDaeFinal=infodae.scene;
				modeloDaeFinal.position.set(14,21.3,0);
				modeloDaeFinal.scale.x=modeloDaeFinal.scale.y=modeloDaeFinal.scale.z=.5;
				modeloDaeFinal.rotation.y=0;
				Escenario.add(modeloDaeFinal);
			
			}

			





			

		










			}
			function agregar2(){
				alert("Hola");
			Modelo3DDAE=new THREE.ColladaLoader();
			Modelo3DDAE.load("PISO 30.dae",AgregarDae);
			Modelo3DDAE.load("PISO 30.dae",AgregarDae2);
			
			function AgregarDae(infodae){
			
				modeloDaeFinal=infodae.scene;
				modeloDaeFinal.position.set(7.1,14.2,0);
				modeloDaeFinal.scale.x=modeloDaeFinal.scale.y=modeloDaeFinal.scale.z=.5;
				modeloDaeFinal.rotation.y=0;
				Escenario.add(modeloDaeFinal);
			
			}
			function AgregarDae2(infodae){
			
				modeloDaeFinal=infodae.scene;
				modeloDaeFinal.position.set(7.1,21.3,0);
				modeloDaeFinal.scale.x=modeloDaeFinal.scale.y=modeloDaeFinal.scale.z=.5;
				modeloDaeFinal.rotation.y=0;
				Escenario.add(modeloDaeFinal);
			
			}


		
			Modelo3DDAE.load("PISO 30.dae",AgregarDae3);
			Modelo3DDAE.load("PISO 30.dae",AgregarDae4);
			
			function AgregarDae3(infodae){
			
				modeloDaeFinal=infodae.scene;
				modeloDaeFinal.position.set(7.1,0,0);
				modeloDaeFinal.scale.x=modeloDaeFinal.scale.y=modeloDaeFinal.scale.z=.5;
				modeloDaeFinal.rotation.y=0;
				Escenario.add(modeloDaeFinal);
			
			}
			function AgregarDae4(infodae){
			
				modeloDaeFinal=infodae.scene;
				modeloDaeFinal.position.set(7.1,7.1,0);
				modeloDaeFinal.scale.x=modeloDaeFinal.scale.y=modeloDaeFinal.scale.z=.5;
				modeloDaeFinal.rotation.y=0;
				Escenario.add(modeloDaeFinal);
			
			}

			}
	</script>
           
                
@endsection
