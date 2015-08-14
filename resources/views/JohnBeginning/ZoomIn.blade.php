@extends('Layout')

    @section('css')
        <style>
            .container {
              position: relative;
              margin-left:auto;
              margin-right:auto;
              background-color: gray;
              text-align: center;
              width:1024px;
              height: 600px;
              overflow: hidden;
            }
            #ScreenShot{
              position: absolute;
              top: -9999px;
              bottom: -9999px;
              left: -9999px;
              right: -9999px;
              margin: auto;
              vertical-align : middle;
              width:1024px;
              height: 600px;
            }
            
            #ScreenShot:hover{
              position: absolute;
              top: -9999px;
              bottom: -9999px;
              left: -9999px;
              right: -9999px;
              margin: auto;
              width: 150%;
              height:150%;
              transition: all 2s ease;
              transform-origin:50% 50%;
              filter: progid:DXImageTransform.Microsoft.Matrix(sizingMethod='auto expand',M11=2, M12=-0, M21=0, M22=2);
              }
              
        </style>
    @stop

    @section('js')
      <script>
        $(document).ready(function(){
            $(".container").click(function(){
               $("#ScreenShot").attr({
                  src:"{{ asset('/img/JohnBeginning/Test2.jpg') }}",
                  id:"ScreenShot1",
               });
            });
        });
      </script>
    @stop

    @section('content')

    <div class="container">
      <img id="ScreenShot" src="{{ asset('/img/JohnBeginning/Test1.jpg') }}"></img>
    </div>

    @stop
