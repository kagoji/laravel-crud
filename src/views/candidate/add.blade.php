@extends('crud::layout.master')
@section('CSS')
<style>
    .topBar h2 {

        text-align: center;
        display: table;
        margin: 0 auto;
    }

    .hidden {
        display: none;
    }

    .topBar h2{
        cursor: pointer;
    }
</style>
@endsection
@section('content')
<div class="bodyContent">
    <div class="container">
        <div class="row">
            <div class="col-md-12 cardItem">
                <div class="topBar">
                    <h2 class="Title" onclick="window.location='{{ route("candidates.show") }}';">Candidate Information</h2>

                </div>

            </div>
        </div>
    </div>
    <div class="cardItemWrap secPadLeftRight">
        <div class="container">
            <div class="row">
                <div class="col-md-12 cardItem">
                    <div class="cardSingleItem">
                        <div class="cardItemInner">
                            <!--Session message show -->
                            @if ($errors->any())
                                @if ($errors->count() > 0)
                                <div class="alert alert-danger btn-squared">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <h6>The following errors have occurred:</h6>
                                    <ul>
                                        @foreach( $errors->all() as $message )
                                        <li>{{ $message }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                            @endif
                            
                            @if(Session::has('message'))
                            <div class="alert alert-success btn-squared" role="alert">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                {{ Session::get('message') }}
                            </div>
                            @endif
                            @if(Session::has('errormessage'))
                            <div class="alert alert-danger btn-squared" role="alert">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                {{ Session::get('errormessage') }}
                            </div>
                            @endif

                            <h3 class="secTitle">
                                <div class="titleIcon">
                                    <svg id="Component_56_1" data-name="Component 56 – 1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="27.992" height="35.292" viewBox="0 0 27.992 35.292">
                                        <defs>
                                            <clipPath id="clip-path">
                                                <rect id="Rectangle_410" data-name="Rectangle 410" class="cls-1"
                                                    width="27.992" height="35.292" />
                                            </clipPath>
                                        </defs>
                                        <g id="Group_387" data-name="Group 387" class="cls-2">
                                            <path id="Path_522" data-name="Path 522" class="cls-1"
                                                d="M15.827.03c0,1.407-.007,2.724,0,4.04A3.043,3.043,0,0,0,19.073,7.3c1.316.008,2.632,0,4,0v13.54A7.8,7.8,0,0,0,14.945,24c-2,2.778-1.985,5.75-.381,8.82-.254.02-.463.05-.672.05q-5.858,0-11.716,0C.673,32.87,0,32.2,0,30.684Q0,16.419,0,2.154A1.874,1.874,0,0,1,2.135,0Q8.64,0,15.145,0c.2,0,.4.016.683.029M11.484,12.176q3.5,0,6.992,0c.477,0,1,0,.979-.642-.019-.586-.517-.581-.966-.58q-6.916,0-13.832,0c-.477,0-1-.005-.979.642.019.586.517.582.966.581q3.42-.006,6.84,0m.086,3.651q-3.458,0-6.916,0c-.477,0-1,0-.976.645.021.586.52.578.968.578q6.916,0,13.832,0c.478,0,1,0,.976-.645-.021-.586-.52-.579-.969-.578q-3.458.006-6.916,0M7.891,21.916c1.139,0,2.278-.005,3.416,0,.451,0,.9-.106.819-.621a1.009,1.009,0,0,0-.774-.574c-2.3-.046-4.605-.024-6.908-.028-.436,0-.838.163-.743.617a1.029,1.029,0,0,0,.775.575c1.135.066,2.276.027,3.415.027"
                                                transform="translate(0 0.001)" />
                                            <path id="Path_523" data-name="Path 523" class="cls-1"
                                                d="M102.721,144.016a6.687,6.687,0,1,1-6.687,6.671,6.67,6.67,0,0,1,6.687-6.671m-.605,6.086a10.05,10.05,0,0,0-1.695.027c-.27.049-.489.377-.732.579.236.2.45.539.713.584a10.463,10.463,0,0,0,1.713.028,10.131,10.131,0,0,0,.026,1.662,1.025,1.025,0,0,0,.556.727c.458.093.64-.288.637-.73,0-.544,0-1.089,0-1.659.61,0,1.092-.014,1.572,0,.458.017.9-.088.813-.61-.04-.236-.49-.512-.792-.568a8.945,8.945,0,0,0-1.594-.026,9.9,9.9,0,0,0-.028-1.707c-.05-.268-.388-.482-.6-.721-.2.241-.519.461-.567.729a10.116,10.116,0,0,0-.026,1.681"
                                                transform="translate(-81.418 -122.097)" />
                                            <path id="Path_524" data-name="Path 524" class="cls-1"
                                                d="M112.043,7.092l4.979,4.979c-1.146,0-2.32.052-3.488-.018a1.635,1.635,0,0,1-1.475-1.51c-.061-1.149-.016-2.3-.016-3.45"
                                                transform="translate(-94.977 -6.013)" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="text">
                                    New Canditate
                                </div>
                            </h3>

                            <div class="productDetailsForm">

                                <form action="{{ route('candidates.store') }}" method="POST"
                                    id="candidateForm">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="candi_name">Name</label>
                                                <div class="selectItem">
                                                    <input type="text" class="form-control" name="candidate_name"
                                                        id="candi_name" value="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="candi_mobile">Mobile</label>
                                                <div class="selectItem">
                                                    <input type="text" class="form-control" name="candidate_mobile"
                                                        id="candi_mobile" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="candi_email">Email</label>
                                                <div class="selectItem">
                                                    <input type="email" class="form-control" name="candidate_email"
                                                        id="candi_email" value="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="candi_resume_url">Resume URL</label>
                                                <div class="selectItem">
                                                    <input type="text" class="form-control" name="candidate_resume_url"
                                                        id="candi_resume_url" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-12">
                                            <div class="btnWrap text-center">
                                                <button type="submit" class="btn btn-success submitBtn">Save</button>
                                                <button type="button" onclick="window.location.reload();" class="btn btnClose submitBtn">Cancel</button>

                                            </div>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="caseTableWrap secPadLeftRight">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   

                    <div class="caseTableInner">
                        <h3 class="secTitle">
                            <div class="titleIcon">
                                <svg id="Component_56_1" data-name="Component 56 – 1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="27.992" height="35.292"
                                    viewBox="0 0 27.992 35.292">
                                    <defs>
                                        <clipPath id="clip-path">
                                            <rect id="Rectangle_410" data-name="Rectangle 410" class="cls-1"
                                                width="27.992" height="35.292" />
                                        </clipPath>
                                    </defs>
                                    <g id="Group_387" data-name="Group 387" class="cls-2">
                                        <path id="Path_522" data-name="Path 522" class="cls-1"
                                            d="M15.827.03c0,1.407-.007,2.724,0,4.04A3.043,3.043,0,0,0,19.073,7.3c1.316.008,2.632,0,4,0v13.54A7.8,7.8,0,0,0,14.945,24c-2,2.778-1.985,5.75-.381,8.82-.254.02-.463.05-.672.05q-5.858,0-11.716,0C.673,32.87,0,32.2,0,30.684Q0,16.419,0,2.154A1.874,1.874,0,0,1,2.135,0Q8.64,0,15.145,0c.2,0,.4.016.683.029M11.484,12.176q3.5,0,6.992,0c.477,0,1,0,.979-.642-.019-.586-.517-.581-.966-.58q-6.916,0-13.832,0c-.477,0-1-.005-.979.642.019.586.517.582.966.581q3.42-.006,6.84,0m.086,3.651q-3.458,0-6.916,0c-.477,0-1,0-.976.645.021.586.52.578.968.578q6.916,0,13.832,0c.478,0,1,0,.976-.645-.021-.586-.52-.579-.969-.578q-3.458.006-6.916,0M7.891,21.916c1.139,0,2.278-.005,3.416,0,.451,0,.9-.106.819-.621a1.009,1.009,0,0,0-.774-.574c-2.3-.046-4.605-.024-6.908-.028-.436,0-.838.163-.743.617a1.029,1.029,0,0,0,.775.575c1.135.066,2.276.027,3.415.027"
                                            transform="translate(0 0.001)" />
                                        <path id="Path_523" data-name="Path 523" class="cls-1"
                                            d="M102.721,144.016a6.687,6.687,0,1,1-6.687,6.671,6.67,6.67,0,0,1,6.687-6.671m-.605,6.086a10.05,10.05,0,0,0-1.695.027c-.27.049-.489.377-.732.579.236.2.45.539.713.584a10.463,10.463,0,0,0,1.713.028,10.131,10.131,0,0,0,.026,1.662,1.025,1.025,0,0,0,.556.727c.458.093.64-.288.637-.73,0-.544,0-1.089,0-1.659.61,0,1.092-.014,1.572,0,.458.017.9-.088.813-.61-.04-.236-.49-.512-.792-.568a8.945,8.945,0,0,0-1.594-.026,9.9,9.9,0,0,0-.028-1.707c-.05-.268-.388-.482-.6-.721-.2.241-.519.461-.567.729a10.116,10.116,0,0,0-.026,1.681"
                                            transform="translate(-81.418 -122.097)" />
                                        <path id="Path_524" data-name="Path 524" class="cls-1"
                                            d="M112.043,7.092l4.979,4.979c-1.146,0-2.32.052-3.488-.018a1.635,1.635,0,0,1-1.475-1.51c-.061-1.149-.016-2.3-.016-3.45"
                                            transform="translate(-94.977 -6.013)" />
                                    </g>
                                </svg>
                            </div>
                            <div class="text">
                                Canditate List

                            </div>

                        </h3>
                        <div class="caseTableWrap table-responsive">
                            <table class="table caseTable">
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Resume</th>
                                    <th>Action</th>
                                </tr>
                                @if(isset($candidates) && count($candidates)>0)
                                    @foreach($candidates as $key => $candidate)

                                    <tr >
                                        <td>{{ ($candidates->currentPage() - 1) * $candidates->perPage() + $loop->index + 1 }}</td>
                                        <td>{{$candidate->name}}</td>
                                        <td>{{$candidate->email}}</td>
                                        <td>{{$candidate->phone}}</td>
                                        <td><a href="{{$candidate->resume_url}}" target="_blank">{{Str::limit($candidate->resume_url,20, '...')}}</a></td>

                                        <td>
                                            <a href="{{route('candidates.edit',$candidate->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true" style="color: #FF7700;"></i></a>
                                            <a href="{{route('candidates.destroy',$candidate->id)}}"><i class="fa fa-trash" aria-hidden="true" style="color: #FF7700;"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                @else
                                <tr>
                                    <td colspan="6">No data available</td>
                                </tr>
                                @endif

                            </table>
                            @if(isset($candidates) && count($candidates)>0)
                                {{$candidates->links()}}
                            @endif
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
@section('JS')
<script>
    $(function () {
        $('#candidateForm').validate({
            rules: {
                candidate_name: {
                    required: true
                },
                candidate_email: {
                    required: true
                },
                candidate_mobile: {
                    required: true
                }

            },
            highlight: function (element) {
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
            },
            unhighlight: function (element) {
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
            },
            errorElement: 'span',
            errorClass: 'help-block',
            errorPlacement: function (error, element) {
                if (element.parent('.input-group').length) {
                    error.insertAfter(element.parent());
                } else {
                    error.insertAfter(element);
                    element.attr("placeholder", error.text());
                }
            }
        });
    })




</script>
@endsection