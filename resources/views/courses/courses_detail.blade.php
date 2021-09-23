@extends('layouts.app')

@section('content')
<section class="course-detail container-fluid">
    <div class="course-detail-container">
        <div class="row row-one">
            <div class="col-lg-8">
                <div class="img-container">
                    <img src="{{$course->logo_path}}" alt="anh">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="description-detail-course">
                    <div class="title-description-container">
                        <p class="title-description">Descriptions course</p>
                    </div>
                    <div class="description-container">
                        <p class="description">{{$course->description}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-two">
            <div class="col-lg-8">
                <div class="nav-course-detail-container">
                    <ul class="nav nav-tabs nav-course-detail">
                        <li class="nav-item col-lg-2 pl-0">
                            <a class="nav-link active btn-nav-detail" data-toggle="tab" href="#lessons">Lessons</a>
                        </li>
                        <li class="nav-item col-lg-2 pl-0">
                            <a class="nav-link btn-nav-detail" data-toggle="tab" href="#teacher">Tearcher</a>
                        </li>
                        <li class="nav-item col-lg-2 pl-0">
                            <a class="nav-link btn-nav-detail" data-toggle="tab" href="#reviews">Reviews</a>
                        </li>
                    </ul>
                </div>
                <div class="lessons-teacher-reiews-container">
                    <div class="tab-content">
                        <div id="lessons" class="tab-pane active">
                            @include('courses.tab_lessons', [$lessons, $course, $isJoined])
                        </div>
                        <div id="teacher" class="tab-pane">
                            @include('courses.tab_teacher', $teacher)
                        </div>
                        <div id="reviews" class="tab-pane">
                            @include('courses.tab_review')
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="col-lg-12 col-show-other">
                    <div class="row row-detail">
                        <div class="col-lg-2 align-self-center col-icon">
                            <img src="{{ asset('images/learner.png') }}" alt="">
                        </div>
                        <div class="col-lg-3 pr-0 align-self-center col-txt">
                            <p>Learners :</p>
                        </div>
                        <div class="col-lg-4 pl-0 align-self-center col-txt col-txt-main">
                            <p>{{$course->number_user_student}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row row-detail">
                        <div class="col-lg-2 align-self-center col-icon">
                            <img src="{{ asset('images/lessons.png') }}" alt="">
                        </div>
                        <div class="col-lg-3 pr-0 align-self-center col-txt">
                            <p>Lessons :</p>
                        </div>
                        <div class="col-lg-4 pl-0 align-self-center col-txt col-txt-main">
                            <p>{{ $course->number_lesson }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row row-detail">
                        <div class="col-lg-2 align-self-center col-icon">
                            <img src="{{ asset('images/times.png') }}" alt="">
                        </div>
                        <div class="col-lg-3 pr-0 align-self-center col-txt">
                            <p>Times :</p>
                        </div>
                        <div class="col-lg-4 pl-0 align-self-center col-txt col-txt-main">
                            <p>{{$course->times}} h</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row row-detail">
                        <div class="col-lg-2 align-self-center col-icon">
                            <img src="{{ asset('images/tags.png') }}" alt="">
                        </div>
                        <div class="col-lg-3 pr-0 align-self-center col-txt">
                            <p>Tags :</p>
                        </div>
                        <div class="col-lg-4 pl-0 align-self-center col-txt col-txt-tags">
                            <p>@foreach ($tags as $tag) #{{ $tag->content }} @endforeach</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row row-detail">
                        <div class="col-lg-2 align-self-center col-icon">
                            <img src="{{ asset('images/price.png') }}" alt="">
                        </div>
                        <div class="col-lg-3 pr-0 align-self-center col-txt">
                            <p>Price :</p>
                        </div>
                        <div class="col-lg-4 pl-0 align-self-center col-txt col-txt-main">
                            <p>{{ number_format($course->price) }} VND</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 p-0 show-other-courses-container">
                    <div class="txt-show-other-courses">
                        <p>Other Courses</p>
                    </div>
                    @foreach ($otherCourses as $key => $item)
                    <div class="show-other-courses">
                        <p>{{$key +1}}. {{$item->description}}</p>
                    </div>
                    @endforeach
                    <div class="col-kg-12 btn-view-all">
                        <a href="/allcourses">View all ours courses</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection