

@extends('user.layout')
@section('title')
    <title> Transaction</title>
@endsection
@section('user-content')

<div class="row">
<div class="col-xl-12">


    <div class="white_card card_height_100 mb_30">
        <!--<div class="white_card_header">
            <div class="box_header m-0">
                <div class="main-title">
                    <h3 class="m-0">Data table</h3>
                </div>
            </div>
        </div>-->
        <div class="white_card_body">
            <div class="QA_section">
                <div class="white_box_tittle list_header">
                    <div class="box_right d-flex lms_block">
                        <!--
                        <div class="add_button ms-2">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#addcategory" class="btn_1">Add New</a>
                        </div>
                        -->
                    </div>
                </div>
                <div class="QA_table mb_30">
    
            <table class="table lms_table_active">
                <thead>
                    <tr>
                        <th scope="col">title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Teacher</th>
                        <th scope="col">Lesson</th>
                        <th scope="col">Enrolled</th>
                        <th scope="col">Price</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> 
                            <a href="#" class="question_content"> title here 1</a>
                        </th>
                        <td>Category name</td>
                        <td>Teacher James</td>
                        <td>Lessons name</td>
                        <td>16</td>
                        <td>$25.00</td>
                        <td><a href="#" class="status_btn">Active</a></td>
                    </tr>
                </tbody>
            </table>
            </div>
            </div>
            </div>
        </div>
    
    
         </div>
    </div>

@endsection