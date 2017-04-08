@extends("dashboard.cms.layouts.app")

@section("title")
{{$title}}
@endsection

@section("content")
<form action="{{route("page.store")}}" method="post">
{{csrf_field()}}
<div class="col-md-8 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>
                Заголок
                <small>
                    и СЕО
                </small>
            </h2>
            <ul class="nav navbar-right panel_toolbox">
                <li>
                <button class="btn btn-info" type="submit">Сохранить</button>
                </li>
                <li>
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up">
                        </i>
                    </a>
                </li>
            </ul>
            <div class="clearfix">
            </div>
        </div>
        <div class="x_content">
            <br>
                <div class="form-horizontal form-label-left" data-parsley-validate="" id="demo-form2" novalidate="">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">
                            Заголовок
                            <span class="required">
                                *
                            </span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control col-md-7 col-xs-12" id="last-name" name="title" required="required" type="text">
                            </input>
                        </div>
                    </div>
                    {{-- Второй заголовок --}}
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="middle-name">
                            Второй заголовок
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control col-md-7 col-xs-12" id="middle-name" name="second_title" type="text">
                            </input>
                        </div>
                    </div>
                    {{-- второй заголовок --}}
                    <div class="ln_solid">
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-6 col-xs-12" for="middle-name">
                            Описание
                        </label>
                        <div class=" col-xs-12">
                            <textarea class="form-control col-md-7 col-xs-12" id="middle-name" name="description" type="text">
                            </textarea>
                        </div>
                    </div>
                </div>
            </br>
        </div>
    </div>
</div>
<div class="col-md-4 col-sm-12 col-xs-12">
  <div class="x_panel">
        <div class="x_title">
            <h2>
                Статус
            </h2>
            <ul class="nav navbar-right panel_toolbox">
                <li>
                <button class="btn btn-info" type="submit">Сохранить</button>
                </li>
                <li>
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up">
                        </i>
                    </a>
                </li>
            </ul>
            <div class="clearfix">
            </div>
        </div>
        <div class="x_content">
            <br>
                <div class="form-horizontal form-label-left" data-parsley-validate="" id="demo-form2" novalidate="">
                    <p>Статус: <a href="#">Черновик</a></p>
                </div>
            </br>
        </div>
    </div>
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Контент<small>Sessions</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div id="alerts"></div>

                  <textarea name="content" id="content"></textarea>
                  
                  <br>

                  <div class="ln_solid"></div>
                  <button class="btn btn-info" type="submit">Сохранить</button>
                </div>
              </div>
            </div>
</form>

@endsection

@section("scripts")
  {{-- <script src="{{asset("bower_components/ckeditor/ckeditor.js")}}"></script> --}}
  <script src="{{asset("bower_components/tinymce/tinymce.min.js")}}"></script>
  <script>
  $(function(){
      // var roxy = '/fileman/index.html';
      // CKEDITOR.replace("content", {
      //   filebrowserBrowseUrl: roxy,
      //   filebrowserImageBrowseUrl: roxy + "?type=image",
      //   removeDialogTabs: 'link:upload; image:upload'
      // });
      // 
      tinymce.init({
        selector: "textarea#content",
        plugins : ["advlist autolink link image lists charmap print preview hr anchor pagebreak",
         "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
         "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"],
        language: "ru",
        height: "480",
        toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
        toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
        image_advtab: true ,
       
        external_filemanager_path:"/filemanager/",
        filemanager_title:"Выбрать файл" ,
        filemanager_sort_by: "date",
        external_plugins: { "filemanager" : "plugins/responsivefilemanager/filemanager/plugin.min.js"}
          });
  })

  </script>
@endsection
