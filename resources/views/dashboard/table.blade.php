@extends('dashboard.inc.master')

@section('title','SJAK Doc Share Blank')

@section('content')

  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Registered Members</h1>
<p class="mb-4">A table showing the details of registered members.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Members Table</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Full Names</th>
                        <th>Date of Birth</th>
                        <th>Contact</th>
                        <th>Secondary Contact</th>
                        <th>Gender</th>
                        <th>Date of Joining</th>
                        <th>Membership Number</th>
                        <th>Email</th>
                        <th>Region</th>
                        <th>County</th>
                        <th>Corp</th>
                        <th>Division</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    <th>id</th>
                        <th>Full Names</th>
                        <th>Date of Birth</th>
                        <th>Contact</th>
                        <th>Secondary Contact</th>
                        <th>Gender</th>
                        <th>Date of Joining</th>
                        <th>Membership Number</th>
                        <th>Email</th>
                        <th>Region</th>
                        <th>County</th>
                        <th>Corp</th>
                        <th>Division</th>
                    </tr>
                </tfoot>
                <tbody>
                <tr>
                        <td>1</td>
                        <td>Dominique Wrathall</td>
                        <td>2018-06-23</td>
                        <td>254786490220</td>
                        <td>254795421588</td>
                        <td>Male</td>
                        <td>2024-09-07</td>
                        <td>SJAK/NRB/8012</td>
                        <td>dwrathall0@indiatimes.com</td>
                        <td>Riftvalley</td>
                        <td>West</td>
                        <td>City 5</td>
                        <td>Buru Buru Girls</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Niki Mabbutt</td>
                        <td>2001-11-15</td>
                        <td>254722724260</td>
                        <td>254785543906</td>
                        <td>Male</td>
                        <td>2024-05-22</td>
                        <td>SJAK/NRB/4257</td>
                        <td>nmabbutt1@amazon.co.uk</td>
                        <td>Riftvalley</td>
                        <td>South</td>
                        <td>City 17</td>
                        <td>Highway</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Carlyn Kitteridge</td>
                        <td>1990-11-10</td>
                        <td>254752279681</td>
                        <td>254747547514</td>
                        <td>Female</td>
                        <td>2024-04-04</td>
                        <td>SJAK/NRB/2791</td>
                        <td>ckitteridge2@topsy.com</td>
                        <td>Riftvalley</td>
                        <td>Central</td>
                        <td>City 14</td>
                        <td>Dream University</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Lyndsey MacFeely</td>
                        <td>1997-04-22</td>
                        <td>254701756710</td>
                        <td>254787647848</td>
                        <td>Male</td>
                        <td>2024-01-13</td>
                        <td>SJAK/NRB/6674</td>
                        <td>lmacfeely3@yellowpages.com</td>
                        <td>Riftvalley</td>
                        <td>West</td>
                        <td>City 15</td>
                        <td>Royal High School</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Kinsley Hornburg</td>
                        <td>1992-06-30</td>
                        <td>254706612732</td>
                        <td>254741674599</td>
                        <td>Male</td>
                        <td>2024-11-14</td>
                        <td>SJAK/NRB/4041</td>
                        <td>khornburg4@rakuten.co.jp</td>
                        <td>Riftvalley</td>
                        <td>East</td>
                        <td>City 1</td>
                        <td>Pioneer High School</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Lorena Vanin</td>
                        <td>2013-04-04</td>
                        <td>254702476858</td>
                        <td>254732556902</td>
                        <td>Female</td>
                        <td>2024-05-09</td>
                        <td>SJAK/NRB/7835</td>
                        <td>lvanin5@hibu.com</td>
                        <td>Riftvalley</td>
                        <td>Central</td>
                        <td>City 14</td>
                        <td>Glenwood High</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Bernadine Laurance</td>
                        <td>1998-07-06</td>
                        <td>254720637852</td>
                        <td>254745868054</td>
                        <td>Female</td>
                        <td>2024-04-16</td>
                        <td>SJAK/NRB/3692</td>
                        <td>blaurance6@sciencedaily.com</td>
                        <td>Riftvalley</td>
                        <td>West</td>
                        <td>City 7</td>
                        <td>Kitui School</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Sibylle Peay</td>
                        <td>2002-05-14</td>
                        <td>254711036145</td>
                        <td>254740589118</td>
                        <td>Female</td>
                        <td>2024-02-10</td>
                        <td>SJAK/NRB/7129</td>
                        <td>speay7@woothemes.com</td>
                        <td>Riftvalley</td>
                        <td>North</td>
                        <td>City 18</td>
                        <td>Kenya High</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Tyler Danilov</td>
                        <td>1991-03-17</td>
                        <td>254700347881</td>
                        <td>254748385295</td>
                        <td>Male</td>
                        <td>2024-02-19</td>
                        <td>SJAK/NRB/1479</td>
                        <td>tdanilov8@hudl.com</td>
                        <td>Riftvalley</td>
                        <td>South</td>
                        <td>City 10</td>
                        <td>Highway Academy</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Sharon Dalloway</td>
                        <td>2011-09-19</td>
                        <td>254708974225</td>
                        <td>254786215604</td>
                        <td>Female</td>
                        <td>2024-06-12</td>
                        <td>SJAK/NRB/6381</td>
                        <td>sdalloway9@vimeo.com</td>
                        <td>Riftvalley</td>
                        <td>West</td>
                        <td>City 7</td>
                        <td>Buru Buru Girls</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Hildegarde Barlow</td>
                        <td>2005-06-27</td>
                        <td>254708182218</td>
                        <td>254741205256</td>
                        <td>Male</td>
                        <td>2024-03-09</td>
                        <td>SJAK/NRB/7799</td>
                        <td>hbarlow10@purevolume.com</td>
                        <td>Riftvalley</td>
                        <td>South</td>
                        <td>City 14</td>
                        <td>Glenwood High</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Terrance Copcutt</td>
                        <td>1995-08-19</td>
                        <td>254710539632</td>
                        <td>254783029867</td>
                        <td>Male</td>
                        <td>2024-01-27</td>
                        <td>SJAK/NRB/1268</td>
                        <td>tcopcutt11@typepad.com</td>
                        <td>Riftvalley</td>
                        <td>Central</td>
                        <td>City 10</td>
                        <td>Royal High School</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Carleen Beche</td>
                        <td>2000-11-04</td>
                        <td>254702623700</td>
                        <td>254738677951</td>
                        <td>Female</td>
                        <td>2024-03-26</td>
                        <td>SJAK/NRB/4872</td>
                        <td>cbeche12@hibu.com</td>
                        <td>Riftvalley</td>
                        <td>East</td>
                        <td>City 17</td>
                        <td>Dream University</td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>Hobart Titterell</td>
                        <td>2007-01-06</td>
                        <td>254791290655</td>
                        <td>254779167546</td>
                        <td>Male</td>
                        <td>2024-04-02</td>
                        <td>SJAK/NRB/8925</td>
                        <td>htitterell13@com.com</td>
                        <td>Riftvalley</td>
                        <td>South</td>
                        <td>City 7</td>
                        <td>Pioneer High School</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>Leanne Maccoll</td>
                        <td>2008-10-11</td>
                        <td>254705376349</td>
                        <td>254777614053</td>
                        <td>Female</td>
                        <td>2024-07-16</td>
                        <td>SJAK/NRB/1364</td>
                        <td>lmaccoll14@springer.com</td>
                        <td>Riftvalley</td>
                        <td>North</td>
                        <td>City 12</td>
                        <td>Kenya High</td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>Wilmer Sperring</td>
                        <td>2004-04-12</td>
                        <td>254708273537</td>
                        <td>254780134523</td>
                        <td>Male</td>
                        <td>2024-08-19</td>
                        <td>SJAK/NRB/8231</td>
                        <td>wsperring15@jalbum.net</td>
                        <td>Riftvalley</td>
                        <td>West</td>
                        <td>City 11</td>
                        <td>Highway</td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>Eliezer Chadderton</td>
                        <td>1997-12-12</td>
                        <td>254723574261</td>
                        <td>254744871994</td>
                        <td>Male</td>
                        <td>2024-06-26</td>
                        <td>SJAK/NRB/7429</td>
                        <td>echadderton16@bizjournals.com</td>
                        <td>Riftvalley</td>
                        <td>Central</td>
                        <td>City 17</td>
                        <td>Dream University</td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>Rudy Galipoli</td>
                        <td>2001-09-02</td>
                        <td>254701759582</td>
                        <td>254787150134</td>
                        <td>Male</td>
                        <td>2024-11-23</td>
                        <td>SJAK/NRB/8019</td>
                        <td>rgalipoli17@bigcartel.com</td>
                        <td>Riftvalley</td>
                        <td>East</td>
                        <td>City 6</td>
                        <td>Buru Buru Girls</td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>Anders Willmer</td>
                        <td>1992-12-05</td>
                        <td>254704226017</td>
                        <td>254787328042</td>
                        <td>Male</td>
                        <td>2024-07-07</td>
                        <td>SJAK/NRB/1139</td>
                        <td>awillmer18@theatlantic.com</td>
                        <td>Riftvalley</td>
                        <td>North</td>
                        <td>City 11</td>
                        <td>Highway Academy</td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>Hershel Lix</td>
                        <td>1996-05-19</td>
                        <td>254702532617</td>
                        <td>254790223145</td>
                        <td>Male</td>
                        <td>2024-09-21</td>
                        <td>SJAK/NRB/7491</td>
                        <td>hlix19@jiathis.com</td>
                        <td>Riftvalley</td>
                        <td>South</td>
                        <td>City 2</td>
                        <td>Kenya High</td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->



@endsection