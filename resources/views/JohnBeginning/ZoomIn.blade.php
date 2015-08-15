@extends('Layout')

    @section('css')
        <style>
            .container {
              position: relative;
              margin-left:auto;
              margin-right:auto;
              background-color:;
              text-align: center;
              width:1024px;
              height: 600px;
              overflow: hidden;
            }
            .zoom{
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
/*
            #together{
              position: absolute;
              top: -9999px;
              bottom: -9999px;
              left: -9999px;
              right: -9999px;
              margin: auto;
              vertical-align : middle;
              width:1024px;
              height: 600px;
              background: url('/img/JohnBeginning/background_stage1.png');
              background-position: center;
              background-size: cover;
              transition: all 2s ease-out;
            }
            #together:hover{
              position: absolute;
              vertical-align : middle;
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
  */
            .zoom:hover{
              position: absolute;
              vertical-align : middle;
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
              .choices{
                position: absolute;
                bottom: 0px;                
              }
        </style>
    @stop

    @section('js')
      <script>
        $(document).ready(function(){
            $("#together").click(function(){
               $(".container").css("background","url(/img/JohnBeginning/Test2.jpg)");
            });
            $(".zoom").click(function(){
               $(".zoom").attr({
                  src:"",
                  class:"nozoom",
               });
            });
          
        });
      </script>
    @stop

    @section('content')

    <div class="container">
      <div id="together">
        <img id="stage" class="zoom" ></img>
        <!--src="{{ asset('/img/JohnBeginning/background_stage2.jpg') }}"
            src="{{ asset('/img/JohnBeginning/background_stage1_window.png') }}"-->
        <img id="window" class="zoom" src="{{ asset('/img/JohnBeginning/background_stage1.jpg') }}"></img>
      </div>
      <div class="choices">
        1.打火機  2.打滾  3.拍掉  4.瑞士刀
      </div>
    </div>

    @stop
