@extends('layouts.admin')
    @section('content')
        <div class="home-content">
            <div class="sales-boxes">
                <div class="recent-sales box">
                    <div class="title">Product Page</div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-component">
                                <input type="submit" value="Change color" name="changecolor" class="chnagecolor">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-content">
            <div class="sales-boxes">
                <div class="recent-sales box">
                    <div class="title">Products</div>
                    <div class="sales-details">
                        <table id="customers">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Serial NUmber</th>
                                    <th>Date</th>
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
                    <div class="title">Product Form</div>
                    <div >
                        <div class="form-component">
                            <form id="productform" action="{{ route('create-product') }}">
                                <label for="fname">Product Name</label>
                                <input type="text" id="product_name" name="product_name" placeholder="Your Product Number.." required>
                                <label for="lname">Serial Number</label>
                                <input type="text" id="sno" name="sno" placeholder="Your Serial Number.." required>
                                <input type="submit" value="Submit" >
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

