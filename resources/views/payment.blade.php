@extends('layouts.app')
@section('content')

    <form>
        <div class="box">
            <div id="container">
                <h2>Credit Card Form</h2>

                <label>
                    <span>Name On Card</span>
                    <input id="nameoncard" type="text" placeholder="Jane Smith" required>
                </label>

                <label>
                    <span>Card Number</span>
                    <input id="cardnumber" type="text" maxlength="19" placeholder="XXXX-XXXX-XXXX-XXXX" required>
                </label>

                <label>
                    <span>Expiry Date</span>
                    <select id="month" name="month" required>
                        <option value="1" selected>January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>

                    <select id="year" name="year">
                        <option value="0" selected>2022</option>
                        <option value="1">2023</option>
                        <option value="2">2024</option>
                        <option value="3">2025</option>
                        <option value="4">2026</option>
                        <option value="5">2027</option>
                        <option value="6">2028</option>

                    </select>
                </label>

                <label>
                    <span>CSV</span>
                    <input id="csv" type="number" min="0" maxlength="3" placeholder="XXX" required>
                </label>

                <label>
                    <input class="button" type="submit" value="Submit">
                </label>

            </div>
        </div>

    </form>

@endsection

