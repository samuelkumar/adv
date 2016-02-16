<div class="panel">
<div class="panel-body container-fluid">
    <div class="row" data-plugin="matchHeight" data-by-row="true">
<div class="col-xlg-6 col-md-12">
          <!-- Panel Predictions -->
          <div class="widget widget-shadow widget-responsive" id="widgetLineareaColor">
            <div class="widget-content widget-radius bg-white">
              <div class="padding-top-30 padding-30" style="height:calc(100% - 250px);">
                <div class="row">
                  <div class="col-xs-7">
                    <p class="font-size-20 blue-grey-700">Eneergy Predictions</p>
                    <p>Quisque volutpat condimentum velit. Class aptent taciti</p>
                    <div class="counter counter-md text-left">
                      <div class="counter-number-group">
                        <span class="counter-icon red-600"><i class="icon wb-triangle-up" aria-hidden="true"></i></span>
                        <span class="counter-number red-600">2,250</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-5">
                    <div class="pull-right clearfix">
                      <ul class="list-unstyled">
                        <li class="margin-bottom-5 text-truncate">
                          <i class="icon wb-medium-point green-600 margin-right-5" aria-hidden="true"></i>                          Diretary intake
                        </li>
                        <li class="margin-bottom-5 text-truncate">
                          <i class="icon wb-medium-point orange-600 margin-right-5" aria-hidden="true"></i>                          Motion
                        </li>
                        <li class="margin-bottom-5 text-truncate">
                          <i class="icon wb-medium-point red-600 margin-right-5" aria-hidden="true"></i>                          Other
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ct-chart height-250"></div>
            </div>
          </div>
          <!-- End Panel Predictions -->
        </div>

        <div class="col-xlg-3 col-md-6">
          <!-- Panel Snowing -->
          <div class="widget widget-shadow" style="overflow:hidden;">
            <div class="widget-content widget-radius text-center bg-white">
              <div class="padding-30 blue-grey-500 height-300">
                <canvas id="widgetSnow" height="145" width="100"></canvas>
                <div class="font-size-40">-4°
                  <span class="font-size-30">C</span>
                </div>
                <div class="blue-grey-400">SNOWING</div>
              </div>
              <div class="bg-blue-600 padding-horizontal-30 padding-vertical-25" style="height:calc(100% - 300px);">
                <div class="row">
                  <div class="col-xs-6">
                    <div class="white">
                      <i class="wb-triangle-down font-size-20 margin-right-5"></i>
                      <span class="font-size-30">
                        -8°
                        <span class="font-size-24">C</span>
                      </span>
                    </div>
                    <div class="blue-grey-100">LOW</div>
                  </div>
                  <div class="col-xs-6">
                    <div class="white">
                      <i class="wb-triangle-up font-size-20 margin-right-5"></i>
                      <span class="font-size-30">
                        1°
                        <span class="font-size-24">C</span>
                      </span>
                    </div>
                    <div class="blue-grey-100">HIGH</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Panel Snowing -->
        </div>

        <div class="col-xlg-3 col-md-6">
          <!-- Panel Market Dow -->
          <div class="widget widget-shadow" id="widgetStackedBar">
            <div class="widget-content widget-radius bg-white">
              <div class="padding-30 height-150">
                <p>MARKET DOW</p>
                <div class="red-600">
                  <i class="wb-triangle-up font-size-20 margin-right-5"></i>
                  <span class="font-size-30">26,580.62</span>
                </div>
              </div>
              <div class="counters padding-bottom-20 padding-horizontal-30" style="height:calc(100% - 350px);">
                <div class="row no-space">
                  <div class="col-xs-4">
                    <div class="counter counter-sm">
                      <div class="counter-label text-uppercase">APPL</div>
                      <div class="counter-number-group text-truncate">
                        <span class="counter-number-related green-600">+</span>
                        <span class="counter-number green-600">82.24</span>
                        <span class="counter-number-related green-600">%</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="counter counter-sm">
                      <div class="counter-label text-uppercase">FB</div>
                      <div class="counter-number-group text-truncate">
                        <span class="counter-number-related red-600">-</span>
                        <span class="counter-number red-600">12.06</span>
                        <span class="counter-number-related red-600">%</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="counter counter-sm">
                      <div class="counter-label text-uppercase">GOOG</div>
                      <div class="counter-number-group text-truncate">
                        <span class="counter-number-related green-600">+</span>
                        <span class="counter-number green-600">24.86</span>
                        <span class="counter-number-related green-600">%</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ct-chart height-200"></div>
            </div>
          </div>
          <!-- End Panel Market Dow -->
        </div>

        <div class="col-xlg-8 col-md-12">
          <!-- Panel Statistical -->
          <div class="widget widget-shadow" id="widgetStatistical">
            <div class="widget-content widget-radius bg-white">
              <div class="row no-space height-full" data-plugin="matchHeight">
                <div class="col-sm-8 col-xs-12">
                  <div id="widgetJvmap" class="height-full" data-plugin="vectorMap" data-map="ca_lcc_en"></div>
                </div>
                <div class="col-sm-4 col-xs-12 padding-30">
                  <div class="form-group">
                    <div class="input-search input-search-dark">
                      <i class="input-search-icon wb-search" aria-hidden="true"></i>
                      <input type="text" class="form-control" name="" placeholder="Search...">
                    </div>
                  </div>
                  <p class="font-size-20 blue-grey-700">Statistical</p>
                  <p class="blue-grey-400">Status: live</p>
                  <p>
                    <i class="icon wb-map blue-grey-400 margin-right-10" aria-hidden="true"></i>
                    <span>258 Countries, 4835 Cities</span>
                  </p>
                  <ul class="list-unstyled margin-top-20">
                    <li>
                      <p>VISITS</p>
                      <div class="progress progress-xs margin-bottom-25">
                        <div class="progress-bar progress-bar-info bg-blue-600" style="width: 70.3%" aria-valuemax="100"
                        aria-valuemin="0" aria-valuenow="70.3" role="progressbar">
                          <span class="sr-only">70.3%</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <p>TODAY</p>
                      <div class="progress progress-xs margin-bottom-25">
                        <div class="progress-bar progress-bar-info bg-green-600" style="width: 70.3%" aria-valuemax="100"
                        aria-valuemin="0" aria-valuenow="70.3" role="progressbar">
                          <span class="sr-only">70.3%</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <p>WEEK</p>
                      <div class="progress progress-xs margin-bottom-0">
                        <div class="progress-bar progress-bar-info bg-purple-600" style="width: 70.3%"
                        aria-valuemax="100" aria-valuemin="0" aria-valuenow="70.3"
                        role="progressbar">
                          <span class="sr-only">70.3%</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- End Panel Statistical -->
        </div>

        <div class="col-xlg-4 col-md-12">
          <!-- Panel Earned -->
          <div class="widget widget-shadow widget-responsive" id="widgetTimeline">
            <div class="widget-content widget-radius bg-white">
              <div class="padding-30" style="height:120px;">
                <div class="row">
                  <div class="col-xs-4">
                    <div class="counter text-left">
                      <div class="counter-label blue-grey-700">You have earned</div>
                      <div class="counter-number-group">
                        <span class="counter-number red-600">21,451</span>
                        <span class="counter-number-related red-600">USD</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="counter text-left">
                      <div class="counter-label">Currently</div>
                      <div class="counter-number-group">
                        <span class="counter-number">227.34</span>
                        <span class="counter-number-related">KB</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="counter text-left">
                      <div class="counter-label">Average</div>
                      <div class="counter-number-group">
                        <span class="counter-number">117.65</span>
                        <span class="counter-number-related">MB</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <ul class="list-unstyled padding-bottom-50" style="height:calc(100% - 270px);">
                <li class="padding-horizontal-30 padding-vertical-15 container-fluid">
                  <div class="row">
                    <div class="col-xs-3">Mail App</div>
                    <div class="col-xs-6">Redesign project template</div>
                    <div class="col-xs-3">227.34KB</div>
                  </div>
                </li>
                <li class="padding-horizontal-30 padding-vertical-15 container-fluid">
                  <div class="row">
                    <div class="col-xs-3">Calendar</div>
                    <div class="col-xs-6">Redesign project template</div>
                    <div class="col-xs-3">128.62KB</div>
                  </div>
                </li>
              </ul>
              <div class="ct-chart height-150"></div>
            </div>
          </div>
          <!-- End Panel Earned -->
        </div>

        <div class="col-xlg-6 col-md-12">
          <!-- Panel Overall -->
          <div class="widget widget-shadow widget-responsive" id="widgetWatchList">
            <div class="widget-content widget-radius padding-30 bg-white">
              <div class="row padding-bottom-30" style="height:calc(100% - 250px);">
                <div class="col-xs-4">
                  <div class="counter counter-md text-left">
                    <div class="counter-label">OVERALL VIEWS</div>
                    <div class="counter-number-group text-truncate">
                      <span class="counter-number-related red-600">$</span>
                      <span class="counter-number red-600">432,852</span>
                    </div>
                    <div class="counter-label">2% higher than last month</div>
                  </div>
                </div>
                <div class="col-xs-4">
                  <div class="counter counter-sm text-left inline-block">
                    <div class="counter-label">MY BALANCE</div>
                    <div class="counter-number-group">
                      <span class="counter-number-related">$</span>
                      <span class="counter-number">12,346</span>
                    </div>
                  </div>
                  <div class="ct-chart small-bar-one"></div>
                </div>
                <div class="col-xs-4">
                  <div class="counter counter-sm text-left inline-block">
                    <div class="counter-label">NEW ORDERS</div>
                    <div class="counter-number-group">
                      <span class="counter-number-related">$</span>
                      <span class="counter-number">17,555</span>
                    </div>
                  </div>
                  <div class="ct-chart small-bar-two"></div>
                </div>
              </div>
              <div class="ct-chart line-chart height-250"></div>
            </div>
          </div>
          <!-- End Panel Overall -->
        </div>

        <div class="col-xlg-3 col-md-12">
          <div class="row height-full">
            <div class="col-xlg-12 col-md-6" style="height:50%;">
              <!-- Panel Today Sale's -->
              <div class="widget widget-shadow" id="widgetLinepoint">
                <div class="widget-content widget-radius bg-blue-600 white">
                  <div class="padding-top-25 padding-horizontal-30" style="height:calc(100% - 80px);">
                    <p>Today Sale's</p>
                    <p class="font-size-30" style="line-height: 1;">450 USD</p>
                    <p class="blue-200">Last Sale 23.45 USD</p>
                  </div>
                  <div class="ct-chart" style="height: 80px;"></div>
                </div>
              </div>
              <!-- End Panel Today Sale's -->
            </div>
            <div class="col-xlg-12 col-md-6" style="height:50%;">
              <!-- Panel Today Sale's -->
              <div class="widget widget-shadow" id="widgetSaleBar">
                <div class="widget-content widget-radius bg-purple-600 white">
                  <div class="padding-top-25 padding-horizontal-30">
                    <div class="row no-space">
                      <div class="col-xs-6">
                        <p>Today Sale's</p>
                        <p class="purple-200">2% higher than last month</p>
                      </div>
                      <div class="col-xs-6 text-right">
                        <p class="font-size-30 text-nowrap">$ 14,500</p>
                      </div>
                    </div>
                  </div>
                  <div class="ct-chart" style="height: 120px;"></div>
                </div>
              </div>
              <!-- End Panel Today Sale's -->
            </div>
          </div>
        </div>

        <div class="col-xlg-3 col-md-5">
          <!-- Panel Watchlist -->
          <div class="widget widget-shadow" id="widgetTable">
            <div class="widget-content widget-radius bg-white">
              <div class="padding-30 height-150 height-xs-200">
                <p class="clearfix font-size-20 margin-bottom-20">
                  <span class="text-truncate">WATCHLIST</span>
                  <span class="pull-right red-600 font-size-24">$ 102,967</span>
                </p>
                <form action="#" role="search">
                  <div class="input-search input-search-dark">
                    <i class="input-search-icon wb-search" aria-hidden="true"></i>
                    <input type="text" class="form-control" placeholder="Search.." />
                  </div>
                </form>
              </div>
              <table class="table margin-bottom-0" style="height:calc(100% - 150px);">
                <tbody>
                  <tr>
                    <td>GMY</td>
                    <td>$ 9,500</td>
                    <td class="green-600">+ 458</td>
                  </tr>
                  <tr>
                    <td>KPM</td>
                    <td>$ 15,425</td>
                    <td class="red-600">- 1,632</td>
                  </tr>
                  <tr>
                    <td>PTR</td>
                    <td>$ 11,540</td>
                    <td class="green-600">+ 8,326</td>
                  </tr>
                  <tr>
                    <td>HGM</td>
                    <td>$ 15,855</td>
                    <td class="green-600">+ 11,326</td>
                  </tr>
                  <tr>
                    <td>MKR</td>
                    <td>$ 18,500</td>
                    <td class="red-600">- 6,586</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- End Panel Watchlist -->
        </div>

        <div class="col-xlg-5 col-md-7">
          <!-- Panel California -->
          <div class="widget widget-shadow" id="widgetWeather">
            <div class="widget-content widget-radius bg-white">
              <div class="row no-space height-full">
                <div class="col-sm-7 height-full">
                  <div class="padding-35 text-center">
                    <h4>California, Usa</h4>
                    <p class="blue-grey-400 margin-bottom-35">MONDAY MAY 11, 2015</p>
                    <canvas id="widgetSunny" height="60" width="60"></canvas>
                    <div class="font-size-40 red-600 font-weight-600">
                      26°
                      <span class="font-size-30">C</span>
                    </div>
                    <div>Sunday</div>
                  </div>
                  <div class="weather-times padding-30">
                    <div class="row no-space text-center">
                      <div class="col-xs-3">
                        <div class="weather-day vertical-align">
                          <div class="vertical-align-middle">
                            <div class="margin-bottom-5">12:00</div>
                            <i class="wi-day-cloudy font-size-24 margin-bottom-5"></i>
                            <div class="red-600">24°
                              <span class="font-size-12">C</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-3">
                        <div class="weather-day vertical-align">
                          <div class="vertical-align-middle">
                            <div class="margin-bottom-5">12:30</div>
                            <i class="wi-day-sunny font-size-24 margin-bottom-5"></i>
                            <div class="red-600">26°
                              <span class="font-size-12">C</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-3">
                        <div class="weather-day vertical-align">
                          <div class="vertical-align-middle">
                            <div class="margin-bottom-5">13:00</div>
                            <i class="wi-day-sunny font-size-24 margin-bottom-5"></i>
                            <div class="red-600">28°
                              <span class="font-size-12">C</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-3">
                        <div class="weather-day vertical-align">
                          <div class="vertical-align-middle">
                            <div class="margin-bottom-5">13:30</div>
                            <i class="wi-day-sunny font-size-24 margin-bottom-5"></i>
                            <div class="red-600">30°
                              <span class="font-size-12">C</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-5 bg-blue-grey-100 height-full">
                  <div class="weather-list">
                    <ul class="list-unstyled margin-0">
                      <li class="container-fluid">
                        <div class="row no-space">
                          <div class="col-xs-4">
                            SUN
                          </div>
                          <div class="col-xs-4">
                            <i class="wi-day-cloudy font-size-24"></i>
                          </div>
                          <div class="col-xs-4">
                            24 - 26
                          </div>
                        </div>
                      </li>
                      <li class="container-fluid">
                        <div class="row no-space">
                          <div class="col-xs-4">
                            SUN
                          </div>
                          <div class="col-xs-4">
                            <i class="wi-day-cloudy font-size-24"></i>
                          </div>
                          <div class="col-xs-4">
                            24 - 26
                          </div>
                        </div>
                      </li>
                      <li class="container-fluid">
                        <div class="row no-space">
                          <div class="col-xs-4">
                            SUN
                          </div>
                          <div class="col-xs-4">
                            <i class="wi-day-cloudy font-size-24"></i>
                          </div>
                          <div class="col-xs-4">
                            24 - 26
                          </div>
                        </div>
                      </li>
                      <li class="container-fluid">
                        <div class="row no-space">
                          <div class="col-xs-4">
                            SUN
                          </div>
                          <div class="col-xs-4">
                            <i class="wi-day-cloudy font-size-24"></i>
                          </div>
                          <div class="col-xs-4">
                            24 - 26
                          </div>
                        </div>
                      </li>
                      <li class="container-fluid">
                        <div class="row no-space">
                          <div class="col-xs-4">
                            SUN
                          </div>
                          <div class="col-xs-4">
                            <i class="wi-day-cloudy font-size-24"></i>
                          </div>
                          <div class="col-xs-4">
                            24 - 26
                          </div>
                        </div>
                      </li>
                      <li class="container-fluid">
                        <div class="row no-space">
                          <div class="col-xs-4">
                            SUN
                          </div>
                          <div class="col-xs-4">
                            <i class="wi-day-cloudy font-size-24"></i>
                          </div>
                          <div class="col-xs-4">
                            24 - 26
                          </div>
                        </div>
                      </li>
                      <li class="container-fluid">
                        <div class="row no-space">
                          <div class="col-xs-4">
                            SUN
                          </div>
                          <div class="col-xs-4">
                            <i class="wi-day-cloudy font-size-24"></i>
                          </div>
                          <div class="col-xs-4">
                            24 - 26
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Panel California -->
        </div>

        <div class="col-xlg-3 col-md-4">
          <!-- Panel -->
          <div class="widget widget-shadow widget-radius bg-white">
            <div class="widget-header cover">
              <div class="cover-background padding-30" style="background-image: url('../assets/photos/placeholder.png')">
                <blockquote class="cover-quote white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                  nec odio. </blockquote>
              </div>
            </div>
            <div class="widget-body">
              <div class="avatar avatar-sm pull-left margin-right-10 margin-top-5">
                <img src="../assets/portraits/3.jpg" alt="">
              </div>
              <div class="info margin-bottom-25">
                <div class="blue-grey-700 text-uppercase">John Doe</div>
                <div class="blue-grey-400 text-capitalize">Design</div>
              </div>
              <p class="margin-bottom-40">Rudem falso dicitis, curis depravatum affecti stoicos rerum.</p>
              <div class="text-right">
                <a class="text-action" href="javascript:void(0)">
                  <i class="icon wb-heart"></i>
                  <span>23</span>
                </a>
              </div>
            </div>
          </div>
          <!-- End Panel -->
        </div>

        <div class="col-xlg-2 col-md-4">
          <!-- Panel -->
          <div class="widget widget-shadow widget-radius bg-white">
            <div class="widget-header bg-blue-600 vertical-align padding-vertical-20 padding-horizontal-25">
              <blockquote class="cover-quote vertical-align-middle white font-size-20">Corporis dicere disputatione laborat quamque. </blockquote>
            </div>
            <div class="widget-body padding-top-0" style="margin-top: -30px">
              <div class="avatar avatar-lg img-bordered bg-white margin-bottom-10">
                <img src="../assets/portraits/13.jpg" alt="">
              </div>
              <div class="info margin-bottom-25">
                <div class="blue-grey-700">Sarah Graves</div>
                <div class="blue-grey-400">Developer</div>
              </div>
              <p class="margin-bottom-35 blue-grey-500">Menandri nixam arguerent quanti fecerit laudem vidisse elegantis.
                </p>
              <div class="text-right">
                <a class="text-action" href="javascript:void(0)">
                  <i class="icon wb-heart"></i>
                  <span>16</span>
                </a>
              </div>
            </div>
          </div>
          <!-- End Panel -->
        </div>

        <div class="col-xlg-2 col-md-4">
          <!-- Panel Sales Analysis -->
          <div class="widget widget-shadow" id="widgetLinepointDate">
            <div class="widget-content widget-radius bg-white">
              <div class="padding-30 height-200">
                <h3 class="margin-bottom-30">Sales Analysis
                  <Span Class="Badge Bg-Blue-Grey-700 Pull-Right">View</Span>
                </h3>
                <div class="row text-center">
                  <div class="col-xs-4">
                    <div class="counter counter-sm">
                      <div class="counter-label">TOTAL</div>
                      <div class="counter-number red-600">20,186</div>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="counter counter-sm">
                      <div class="counter-label">TODAY</div>
                      <div class="counter-number red-600">36</div>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="counter counter-sm">
                      <div class="counter-label">WEEK</div>
                      <div class="counter-number red-600">60</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="padding-bottom-30 padding-horizontal-30" style="height:calc(100% - 350px);">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent
                libero.
              </div>
              <div class="ct-chart height-150"></div>
            </div>
          </div>
          <!-- End Panel Sales Analysis -->
        </div>
</div> 
</div>
</div>    