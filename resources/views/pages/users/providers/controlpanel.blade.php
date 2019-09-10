@extends('layouts.dashboard')

@section('content')
<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
        <div class="controlPanel center">
                <h2 class="title">Control panel</h2>
                <div class="leftCard">
                <h6 class="title2">Your articles</h6>
                    <div class="table center">
                    <table style="width:100%">
                            <tr>
                            <th>Article</th>
                            <th>Price</th>
                            <th>Availability</th>
                            <th><!--erase space--></th>
                            </tr>
                            <td><button class="btn2 btn--radius-2 btn-article" style="width:100%" type="button"><!--article name--></button></td>
                            <td><!--Price--></td>
                            <td><!--availability--></td>
                            <td><!--erase button--></td>
                        </table>
                    </div>
                </div>
                <div class="rightCard">
                        <h6 class="title2">Orders and reservations</h6>
                            <div class="table center">
                                    <table style="width:100%">
                                            <tr>
                                            <th>Date</th>
                                            <th>Article</th>
                                            <th>Name</th>
                                            <th>Quantity</th>
                                            <th><!--erase space--></th>
                                            </tr>
                                            <td><button class="btn2 btn--radius-2 btn-article" style="width:100%" type="button"><!--article name and onclick, go to edit article--></button></td>
                                            <td><!--Price--></td>
                                            <td><!--availability--></td>
                                            <td><!--erase button--></td>
                                        </table>
                            </div>
                </div>
                <div class="leftCard">
                        <h6 class="title2">Your information</h6>
                        <!--supplier info-->
                </div>
                <div class="rightCard">
                        <h6 class="title2">Progress</h6>
                        <h6>Orders in this month</h6>
                        <h6>Montly income</h6>
                        <h6>Page views of your articles</h6>
                        <h6>Evaluation</h6>

                        <!---->

                </div>
        </div>

        </div>

</div>

@endsection
