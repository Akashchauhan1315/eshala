@extends('layouts.admin')
    @section('content')
        <div class="home-content">
            <div class="sales-boxes">
                <div class="recent-sales box">
                    <div class="title">Dashboard Page</div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-component">
                                <input type="submit" value="Change color" name="changecolor" class="chnagecolor">
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <form id="changetext" action="{{ route('change-text') }}">
                                
                                <div class="col-4">
                                    <div class="form-component">
                                        <input type="text" name="changeform" value="change text" disabled>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-component">
                                        <input type="submit" value="Add button">
                                    </div>
                                </div>
                            </form>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-content">
            <div class="sales-boxes">
                <div class="recent-sales box">
                    <div class="title">User Information</div>
                    <div class="sales-details">
                        <table id="customers">
                            <tr>
                                <th>Company</th>
                                <th>Contact</th>
                                <th>Country</th>
                            </tr>
                            <tr>
                                <td>Alfreds Futterkiste</td>
                                <td>Maria Anders</td>
                                <td>Germany</td>
                            </tr>
                            <tr>
                                <td>Berglunds snabbköp</td>
                                <td>Christina Berglund</td>
                                <td>Sweden</td>
                            </tr>
                            <tr>
                                <td>Centro comercial Moctezuma</td>
                                <td>Francisco Chang</td>
                                <td>Mexico</td>
                            </tr>
                            <tr>
                                <td>Ernst Handel</td>
                                <td>Roland Mendel</td>
                                <td>Austria</td>
                            </tr>
                            <tr>
                                <td>Island Trading</td>
                                <td>Helen Bennett</td>
                                <td>UK</td>
                            </tr>
                            <tr>
                                <td>Königlich Essen</td>
                                <td>Philip Cramer</td>
                                <td>Germany</td>
                            </tr>
                            <tr>
                                <td>Laughing Bacchus Winecellars</td>
                                <td>Yoshi Tannamuri</td>
                                <td>Canada</td>
                            </tr>
                            <tr>
                                <td>Magazzini Alimentari Riuniti</td>
                                <td>Giovanni Rovelli</td>
                                <td>Italy</td>
                            </tr>
                            <tr>
                                <td>North/South</td>
                                <td>Simon Crowther</td>
                                <td>UK</td>
                            </tr>
                            <tr>
                                <td>Paris spécialités</td>
                                <td>Marie Bertrand</td>
                                <td>France</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-content">
            <div class="sales-boxes">
                <div class="recent-sales box">
                    <div class="title">User Form Information</div>
                    <div >
                        <div class="form-component">
                            <form id="userform">
                                <label for="fname">First Name</label>
                                <input type="text" id="fname" name="firstname" placeholder="Your fast name.." required>
                                <label for="lname">Last Name</label>
                                <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
                                <input type="submit" value="Submit" >
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

