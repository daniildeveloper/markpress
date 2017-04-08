@extends("dashboard.cms.layouts.app")

@section("title")
Все страницы
@endsection

@section("content")
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>все страницы</h2>

                    <ul class="nav navbar-right panel_toolbox">
                    <li>
                      <a href="{{route("page.create")}}" class="btn btn-info" style="color: #fff">Добавить новую</a>
                    </li>

                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" id="check-all" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                            </th>
                            <th class="column-title">Заголовок </th>
                            <th class="column-title">Второй заголовок</th>
                            <th class="column-title">Автор</th>
                            <th class="column-title">Статус </th>
                            <th class="column-title">Дата </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                        @foreach($pages as $page)
                          <tr class="even pointer">
                            <td class="a-center ">
                              <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" name="table_records" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                            </td>
                            <td class=" ">
                              <a href="{{route("page.show", $page->id)}}">
                              {{$page->first_title}}
                              </a>
                            </td>
                            <td class=" ">{{$page->second_title}} </td>
                            <td class=" ">{{App\User::find($page->author_id)->login}}</td>
                            <td class=" ">Статус</td>
                            <td class=" ">{{$page->updated_at}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {{$pages->links()}}
                    </div>
              
            
                  </div>
                </div>
              </div>
@endsection