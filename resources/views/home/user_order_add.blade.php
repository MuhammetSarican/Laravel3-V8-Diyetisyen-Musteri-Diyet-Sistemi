@extends('layouts.home')
@section('title','Order Add')



@section('description')
@endsection

@section('keywords','boş')

@section('content')
    <div class="overlay" style="background-image: url('{{asset('assets')}}/images/add_1.jpg');height: 300px">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6 align-self-center">
                    <p style="margin-top: 150px">
                    <h1 class="heading mb-3 text-white">Add Order</h1></p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ml-auto">
                    <div class="card shadow mb-4">
                        <form role="form" action="{{route('user_order_store',['id'=>$datalist->id])}}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="creditCardContainer tabPanel active" id="creditCardTabPanel">
                                    <div class="alertWrapper">
                                        <div class="alertLine alertLine--error  hidden ">
                                            <p></p>
                                            <div class="detail"></div>
                                        </div>
                                        <div class="alertLine alertLine--warning   hidden ">
                                            <p>Online market siparişlerinde banka kartı geçerli değildir</p>
                                            <div class="detail">Çünkü gramaj ve stok değişkenlikleri sebebiyle yalnızca
                                                eline ulaşan ürünlerin tutarını ödersin.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="newCardSelection">
                                        <div class="form-group">
                                            <input type="radio" id="newMpCard" value="card" name="payment"
                                                   class="customRadio" checked="">
                                            <label for="newMpCard">Yeni Kart Ekle</label>
                                            <input type="radio" id="newMpCard" value="cash" name="payment"
                                                   class="customRadio" checked="">
                                            <label for="newMpCard">Kapıda Ödeme</label>
                                        </div>
                                    </div>
                                    <div class="form-group cardNumberField">
                                        <label class="left-0" for="cardNoInput1">Kart No:</label>

                                        <input type="hidden" id="cardNumber"
                                               name="paymentModel.creditCardModel.cardNumber" value="">
                                        <input class="cardNumberInput -metrika-nokeys ui-input-numpad"
                                               autocomplete="off" name="" type="text" value="" tabindex="1"
                                               maxlength="4">

                                        <input class="cardNumberInput -metrika-nokeys ui-input-numpad"
                                               autocomplete="off" name="" type="text" value="" tabindex="2"
                                               maxlength="4">

                                        <input class="cardNumberInput -metrika-nokeys ui-input-numpad"
                                               autocomplete="off" name="" type="text" value="" tabindex="3"
                                               maxlength="4">

                                        <input class="cardNumberInput -metrika-nokeys ui-input-numpad"
                                               autocomplete="off" name="" type="text" value="" tabindex="4"
                                               maxlength="4">
                                        <div class="errorMessage" data-errormessagefor="cardNumber">
                                            <div class="errorText"></div>
                                        </div>
                                    </div>
                                    <div class="form-group cardNameField">
                                        <label class="rightLabel" for="cardOwnerName">Kart Üzerindeki İsim:</label>
                                        <input id="cardOwnerName" autocomplete="off" class="-metrika-nokeys"
                                               name="paymentModel.creditCardModel.cardHolderName"
                                               data-validation="required maxlength alphabetic" data-maxlength="100"
                                               data-required-message="Lütfen isim alanını doldurun." type="text"
                                               value="" tabindex="5">
                                        <label class="rightLabel" for="expireMonth">Son Kullanma Tarihi:</label>
                                        <select data-required-message="Lütfen son kullanma tarihini seçiniz."
                                                id="expireMonth" name="paymentModel.creditCardModel.expireMonth"
                                                tabindex="6" class="custom">
                                            <option value="" selected="selected">Ay</option>

                                            <option value="1"> 1</option>
                                            <option value="2"> 2</option>
                                            <option value="3"> 3</option>
                                            <option value="4"> 4</option>
                                            <option value="5"> 5</option>
                                            <option value="6"> 6</option>
                                            <option value="7"> 7</option>
                                            <option value="8"> 8</option>
                                            <option value="9"> 9</option>
                                            <option value="10"> 10</option>
                                            <option value="11"> 11</option>
                                            <option value="12"> 12</option>
                                        </select>
                                        <select data-required-message="Lütfen son kullanma tarihini seçiniz."
                                                id="expireYear" name="paymentModel.creditCardModel.expireYear"
                                                tabindex="7" class="custom">
                                            <option value="" selected="selected">Yıl</option>

                                            <option value="2022">2022
                                            </option>
                                            <option value="2023">2023
                                            </option>
                                            <option value="2024">2024
                                            </option>
                                            <option value="2025">2025
                                            </option>
                                            <option value="2026">2026
                                            </option>
                                            <option value="2027">2027
                                            </option>
                                            <option value="2028">2028
                                            </option>
                                            <option value="2029">2029
                                            </option>
                                            <option value="2030">2030
                                            </option>
                                            <option value="2031">2031
                                            </option>
                                            <option value="2032">2032
                                            </option>
                                            <option value="2033">2033
                                            </option>
                                            <option value="2034">2034
                                            </option>
                                            <option value="2035">2035
                                            </option>
                                            <option value="2036">2036
                                            </option>
                                            <option value="2037">2037
                                            </option>
                                            <option value="2038">2038
                                            </option>
                                            <option value="2039">2039
                                            </option>
                                            <option value="2040">2040
                                            </option>
                                            <option value="2041">2041
                                            </option>
                                            <option value="2042">2042
                                            </option>
                                            <option value="2043">2043
                                            </option>
                                            <option value="2044">2044
                                            </option>
                                            <option value="2045">2045
                                            </option>
                                            <option value="2046">2046
                                            </option>
                                            <option value="2047">2047
                                            </option>
                                            <option value="2048">2048
                                            </option>
                                            <option value="2049">2049
                                            </option>
                                            <option value="2050">2050
                                            </option>
                                            <option value="2051">2051
                                            </option>
                                            <option value="2052">2052
                                            </option>
                                            <option value="2053">2053
                                            </option>
                                            <option value="2054">2054
                                            </option>
                                            <option value="2055">2055
                                            </option>
                                            <option value="2056">2056
                                            </option>
                                            <option value="2057">2057
                                            </option>
                                            <option value="2058">2058
                                            </option>
                                        </select>
                                        <div class="errorMessage" data-errormessagefor="expireMonth">
                                            <div class="errorText"></div>
                                        </div>
                                        <label class="rightLabel" for="cardOwnerName">CVC No.:</label>
                                        <input id="cardOwnerName" autocomplete="off" class="-metrika-nokeys"
                                               name="paymentModel.creditCardModel.cardHolderName"
                                               data-validation="required maxlength alphabetic" data-maxlength="100"
                                               data-required-message="Lütfen isim alanını doldurun." type="text"
                                               value="" tabindex="5">
                                        <div class="errorMessage" data-errormessagefor="cardOwnerName">
                                            <div class="errorText"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <label>Total:{{$datalist->price}}</label>
                                <button type="submit" class="btn btn-primary">Buy</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
