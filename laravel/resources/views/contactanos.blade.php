@extends('layout')

@section('content')
 	
  <div class="row"><br></div>
   <div class="row">
          <div class="columns">
            @if ($errors->has())

        @endif

          </div>
           <div class="columns large-5 medium-12 small-12 ">
             <h2 class="panel-title Ptittle">Contactanos</h2>
               {!! Form::open(['route' => 'send', 'method' => 'post']) !!}

               {!! Form::label('name','Nombre')!!}
               {!! Form::text('name', null, ['class' => 'form-control' ]) !!} 
               @if($errors->has('name')) <small class="error">Introduce un nombre correcto</small> @endif 
            
              
               {!! Form::label('email', 'E-Mail') !!}
               {!! Form::email('email', null, ['class' => 'form-control' ]) !!}
               @if($errors->has('email')) <small class="error">Introduce un email correcto</small> @endif 

               {!! Form::label('telephone', 'Telefono') !!}
               {!! Form::number('telephone', null, ['class' => 'form-control' ]) !!}
               @if($errors->has('telephone')) <small class="error">Introduce un numero correcto</small> @endif 

               {!! Form::label('body', 'Mensaje') !!}
               {!! Form::textarea('body', null, ['class' => 'form-control' ]) !!}
               @if($errors->has('name')) <small class="error">Introduce un mensaje</small> @endif   

               {!! Form::submit('Enviar', ['class' => 'button' ] ) !!}
               {!! Form::close() !!}            
           </div>
           <div class="small-11 small-centered columns large-7 medium-11 medium-centered Flexible-container"> <iframe class="sombra" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8045.912673171079!2d-74.07153813387045!3d4.63885785847536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a322fd23bd5%3A0x5c8021f80fd69cbb!2sFerrehierros+EMANUEL!5e0!3m2!1ses-419!2sco!4v1436459689602" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
   </div>

@stop
		
				

			
			
			
		