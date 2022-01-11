@extends('layouts.admin')
    @section('content')
        <div class="home-content">
            <div class="sales-boxes">
                <div class="recent-sales box">
                    <div class="title">Setting Page</div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-component">
                                <label class="no-data">No Data Available</label>
                            </div>
                            <div class="col-md-4 username" style="display:none" disabled></div>
                            <div class="col-md-4 name" style="display:none" disabled></div>
                            <div class="col-md-4 age" style="display:none" disabled></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-content">
            <div class="sales-boxes">
                <div class="recent-sales box">
                    <div class="title">Users</div>
                    <div class="sales-details">
                        <table id="customers">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id="display">
                                    <td colspan="3">No Data Available</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-content">
            <div class="sales-boxes">
                <div class="recent-sales box">
                    <div class="title">Setting Form</div>
                    <div >
                        <div class="form-component">
                            <form id="settingform" action="{{ route('settinguser') }}">
                                <label for="fname">My Name</label>
                                <input type="text" id="name" name="name" placeholder="My Name" required>
                                <label for="lname">My Age</label>
                                <input type="text" id="age" name="age" placeholder="My Age." required>
                                <input type="submit" value="Submit" >
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

