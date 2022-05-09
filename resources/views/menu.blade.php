<div class="container-fluid">
    <h2><span>Menus</span></h2>

    <div class="content info-box">
        <a href="{{url('manage-menus?id=new')}}">Create a new menu</a>.
    </div>

    <div class="row" id="main-row">
        <div class="col-sm-3 cat-form @if(count($menus) == 0) disabled @endif">
            <h3><span>Add Menu Items</span></h3>

            <div class="panel-group" id="menu-items">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="#categories-list" data-toggle="collapse" data-parent="#menu-items">Categories <span class="caret pull-right"></span></a>
                    </div>
                    <div class="panel-collapse collapse in" id="categories-list">
                        <div class="panel-body">
{{--                            <div class="item-list-body">--}}
{{--                                @foreach($categories as $cat)--}}
{{--                                    <p><input type="checkbox" name="select-category[]" value="{{$cat->id}}"> {{$cat->title}}</p>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
                            <div class="item-list-footer">
                                <label class="btn btn-sm btn-default"><input type="checkbox" id="select-all-categories"> Select All</label>
                                <button type="button" class="pull-right btn btn-default btn-sm" id="add-categories">Add to Menu</button>
                            </div>
                        </div>
                    </div>
{{--                    <script>--}}
{{--                        $('#select-all-categories').click(function(event) {--}}
{{--                            if(this.checked) {--}}
{{--                                $('#categories-list :checkbox').each(function() {--}}
{{--                                    this.checked = true;--}}
{{--                                });--}}
{{--                            }else{--}}
{{--                                $('#categories-list :checkbox').each(function() {--}}
{{--                                    this.checked = false;--}}
{{--                                });--}}
{{--                            }--}}
{{--                        });--}}
{{--                    </script>--}}
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
{{--                        <a href="#posts-list" data-toggle="collapse" data-parent="#menu-items">posts <span class="caret pull-right"></span></a>--}}
                    </div>
                    <div class="panel-collapse collapse" id="posts-list">
                        <div class="panel-body">
                            <div class="item-list-body">
{{--                                @foreach($posts as $post)--}}
{{--                                    <p><input type="checkbox" name="select-post[]" value="{{$post->id}}"> {{$post->title}}</p>--}}
{{--                                @endforeach--}}
                            </div>
                            <div class="item-list-footer">
                                <label class="btn btn-sm btn-default"><input type="checkbox" id="select-all-posts"> Select All</label>
                                <button type="button" id="add-posts" class="pull-right btn btn-default btn-sm">Add to Menu</button>
                            </div>
                        </div>
                    </div>
{{--                    <script>--}}
{{--                        $('#select-all-posts').click(function(event) {--}}
{{--                            if(this.checked) {--}}
{{--                                $('#posts-list :checkbox').each(function() {--}}
{{--                                    this.checked = true;--}}
{{--                                });--}}
{{--                            }else{--}}
{{--                                $('#posts-list :checkbox').each(function() {--}}
{{--                                    this.checked = false;--}}
{{--                                });--}}
{{--                            }--}}
{{--                        });--}}
{{--                    </script>--}}
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="#custom-links" data-toggle="collapse" data-parent="#menu-items">Custom Links <span class="caret pull-right"></span></a>
                    </div>
                    <div class="panel-collapse collapse" id="custom-links">
                        <div class="panel-body">
                            <div class="item-list-body">
                                <div class="form-group">
                                    <label>URL</label>
                                    <input type="url" id="url" class="form-control" placeholder="https://">
                                </div>
                                <div class="form-group">
                                    <label>Link Text</label>
                                    <input type="text" id="linktext" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="item-list-footer">
                                <button type="button" class="pull-right btn btn-default btn-sm" id="add-custom-link">Add to Menu</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-9 cat-view">
            <h3><span>Menu Structure</span></h3>
            @if(count($menus)== 0)
                <h4>Create New Menu</h4>
                <form method="post" action="{{url('create-menu')}}">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-sm-12">
                            <label>Name</label>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" name="title" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 text-right">
                            <button class="btn btn-sm btn-primary">Create Menu</button>
                        </div>
                    </div>
                </form>
            @endif
        </div>
    </div>
</div>
<style>
    .menu-item-bar{background: #eee;padding: 5px 10px;border:1px solid #d7d7d7;margin-bottom: 5px; width: 75%; cursor: move;display: block;}
    #serialize_output{display: none;}
    .menulocation label{font-weight: normal;display: block;}
    body.dragging, body.dragging * {cursor: move !important;}
    .dragged {position: absolute;z-index: 1;}
    ol.example li.placeholder {position: relative;}
    ol.example li.placeholder:before {position: absolute;}
    #menuitem{list-style: none;}
    #menuitem ul{list-style: none;}
    .input-box{width:75%;background:#fff;padding: 10px;box-sizing: border-box;margin-bottom: 5px;}
    .input-box .form-control{width: 50%}
    .menulocation label{font-weight: normal;display: block;}
</style>
