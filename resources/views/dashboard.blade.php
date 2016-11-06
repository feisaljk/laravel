@extends('layouts.master')

@section('content')
    @include('includes.message-block')
    <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <form action="#" method="post" class="create-post-form">
              <input type="hidden" name="_token" value="#">

                <div class="panel panel-default panel-create"> <!-- panel-create -->
                    <div class="panel-heading">
                        <div class="heading-text">
                            What&#039;s going on?
                        </div>
                    </div>

                    <div class="panel-body">        
                        <textarea name="description" class="form-control createpost-form comment" cols="30" rows="3" id="createPost" cols="30" rows="2" placeholder="Write something....."></textarea>
                    </div>

                    <div class="panel-footer">
                        <ul class="list-inline pull-right">
                            <li><button type="submit" class="btn btn-submit btn-success">post</button></li>
                        </ul>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section class="row posts">
        <div class="col-md-6 col-md-offset-3">
            <div class="timeline-posts">
                <div class="panel panel-default panel-post  animated" id="post4481">
                    <div class="panel-heading no-bg">
                        <div class="post-author">
                            <div class="post-options">
                                <ul class="list-inline no-margin">
                                    <li class="dropdown"><a href="#" class="dropdown-togle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="main-link">
                                                <a href="#" data-post-id="4481" class="edit-post">
                                                    <i class="fa fa-edit" aria-hidden="true"></i>Edit
                                                </a>
                                            </li>
                                            <li class="main-link">
                                                <a href="#" class="delete-post" data-post-id="4481">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>delete
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="user-avatar">
                                <a href="https://goo.gl/Ws3eL5">
                                    <img src="{{ asset('img/2016-09-12-23-34-56maxresdefault.jpg') }}" alt="Bootstrap Guru" title="Bootstrap Guru">
                                </a>
                            </div>
                        
                            <div class="user-post-details">
                                <ul class="list-unstyled no-margin">
                                    <li>
                                        <a href="https://socialite.laravelguru.com/bootstrapguru" title="@bootstrapguru" data-toggle="tooltip" data-placement="top" class="user-name user">
                                        Feisal Jamaludin Kahfi
                                        </a>
                                    </li>
                                    <li>
                                        <time class="post-time timeago" datetime="2016-11-06 19:04:53" title="2016-11-06 19:04:53">
                                            2016-11-06 19:04:53
                                        </time>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="panel-body">
                        <div class="text-wrapper">
                            <p>Hello world </p>
                            <div class="post-image-holder"></div>
                            <div class="post-v-holder"></div>
                        </div>
                        <ul class="actions-count list-inline"></ul>
                    </div>

                    <div class="panel-footer socialite">
                        <ul class="list-inline footer-list">
                            <li><a href="#" class="like-post like-4481" data-post-id="4481"><i class="fa fa-thumbs-o-up"></i>like</a></li>
                            <li><a href="#" class="like-post unlike-4481" data-post-id="4481"><i class="fa fa-thumbs-o-down">    </i>unlike</a></li>
                        </ul>
                    </div>
            
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Post</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="post-body">Edit the Post</label>
                            <textarea class="form-control" name="post-body" id="post-body" rows="5"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="modal-save">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <script>
        var token = '{{ csrf_token() }}';
    </script>
@endsection