@extends('layout')
				@section('content')
               
                @section('js')
                <link href="src/css/least.min.css" rel="stylesheet" />
                <script src="src/js/libs/least/least.min.js"></script>
                @stop

				<h1 class="Ptittle">
					Avisos
				</h1>
			<section id="least">
				<div class="least-preview"></div>
				<ul class="least-gallery">
                <li class="sombra" >
                    <a href="src/media/avisos/big/01.jpg" title="Skateboard" data-subtitle="View Picture" data-caption="<strong>Bold text</strong> normal caption text" >
                        <img src="src/media/avisos/thumbnails/01.jpg" alt="Alt Image Text" />
                    </a>
                </li>
                
                <!-- 2 || Element with data-caption as href-attribute ||-->-->
                <li class="sombra">
                    <a href="src/media/avisos/big/02.jpg" title="Train Rails" data-subtitle="View Picture" data-caption="Now it's possibe to add an URL-Link into caption text - <a href='http://www.google.com' target='_blank'>GOOGLE</a>">
                        <img src="src/media/avisos/thumbnails/02.jpg" alt="Alt Image Text" />
                    </a>
                </li>
                
                <!-- 3 -->
                <li class="sombra">
                    <a href="src/media/avisos/big/03.jpg" title="Apple" data-subtitle="View Picture">
                        <img src="src/media/avisos/thumbnails/03.jpg" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 4 -->
                <li class="sombra">
                    <a href="src/media/avisos/big/04.jpg" title="Road Trip" data-subtitle="View Picture">
                        <img src="src/media/avisos/thumbnails/04.jpg" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 5 -->
                <li class="sombra">
                    <a href="src/media/big/avisos/05.jpg" title="Desert" data-subtitle="View Picture">
                        <img src="src/media/avisos/thumbnails/05.jpg" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 6 -->
                <li class="sombra">
                    <a href="src/media/avisos/big/06.jpg" title="Tree" data-subtitle="View Picture">
                        <img src="src/media/avisos/thumbnails/06.jpg" alt="Alt Image Text" />
                    </a>
                </li>



				</ul>
				
				
			</section>
 t>

                
           
              </script> 
              @section('scriptsExtras')

                <script>
                    $(document).foundation();
           $(document).ready(function(){
                $('.least-gallery').least();
            });
        </script>
        @stop

            
@stop