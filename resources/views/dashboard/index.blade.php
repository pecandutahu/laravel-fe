@extends('layouts.main')

@section('container')
    <div style="border-radius: 10px;
                border: 3px solid #E46713;
                background: #FFF;
                box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);width: 1320px;
            height: 430px;
            flex-shrink: 0;">
        
        <h2>List Batch</h2>
        <table class="table table-striped" style="">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Batch</th>
                <th scope="col">Microscope</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Operator</th>
                <th scope="col">Status</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($listbatch as $item)
                    <tr>
                        <th scope="row"> {{ $loop->iteration }} </th>
                        <td> {{ $item->batch }} </td>
                        <td> {{ $item->microscope }} </td>
                        <td> {{ $item->tanggal }} </td>
                        <td> {{ $item->operator }} </td>
                        <td> {{ $item->status }} </td>
                    </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
    <div class="row mt-5">
            <div class="col-6" style="width: 500px;
                height: 312px;
                flex-shrink: 0;border-radius: 10px;
                background: #FFF;
                box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                <div style="width: 470px;
                    height: 200px;
                    flex-shrink: 0;border-radius: 10px;margin-left:0;
                    background: url({{URL::asset('/images/image1.png')}}), lightgray 50% / cover no-repeat;">
                    
                    <div class="row mt-2 " style="margin-left:2px ">
                        
                        <div class = "col-md-3" style="color: #ffffff;
                            font-size: 14px;
                            font-style: normal;
                            font-weight: 700;
                            line-height: normal;">
                            CPE 2 • 70%
                        </div>
                        <div class = "col" style="color: #ffffff;
                            font-size: 12px;
                            font-style: normal;
                            font-weight: 700;
                            line-height: normal;">
                            13827363647
                        </div>
                    </div>
                </div>
                <div class="row mt-2 " style="margin-left:2px">
                    
                    <div class = "col-md-3" style="color: #000;
                        font-size: 14px;
                        font-style: normal;
                        font-weight: 700;
                        line-height: normal;">
                        Microscope
                    </div>
                    <div class = "col" style="color: #646464;
                        font-size: 12px;
                        font-style: normal;
                        font-weight: 700;
                        line-height: normal;">
                        CKX44012333
                    </div>
                </div>
                <div class="row mt-2 " style="margin-left:2px">
                    
                    <div class = "col-md-3" style="color: #000;
                        font-size: 14px;
                        font-style: normal;
                        font-weight: 700;
                        line-height: normal;">
                        Last Update
                    </div>
                    <div class = "col" style="color: #646464;
                        font-size: 12px;
                        font-style: normal;
                        font-weight: 700;
                        line-height: normal;">
                        04 Apr 2023 11:30
                    </div>
                </div>
                <div class="row mt-2 " style="margin-left:2px">
                    
                    <div class = "col-md-3" style="color: #000;
                        font-size: 14px;
                        font-style: normal;
                        font-weight: 700;
                        line-height: normal;">
                        Batch
                    </div>
                    <div class = "col" style="color: #646464;
                        font-size: 12px;
                        font-style: normal;
                        font-weight: 700;
                        line-height: normal;">
                        13827363647
                    </div>
                </div>
            </div>
            <div class="col">
                <div style = "width: 350px;
                    height: 312px;
                    flex-shrink: 0;border-radius: 10px;
                    margin-left:5px;
                    background: #FFF;
                    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                    
                    <div style="color: #000;
                        font-size: 26px;
                        font-style: normal;
                        font-weight: 700;
                        line-height: normal;">
                        Error Report
                    </div>
                    <div style="width: 160px;
                        height: 30px;
                        flex-shrink: 0;
                        border-radius: 10px;
                        background: #00ABBD;color: #FFF;
                        font-size: 14px;
                        font-style: normal;
                        font-weight: 700;
                        line-height: normal;margin-left: auto; 
                        margin-right: 5px;padding-left:10px">
                         Microscope {{ $errorreport[0]->microscope }} <svg xmlns="http://www.w3.org/2000/svg" width="15" height="10" viewBox="0 0 15 10" fill="none">
                            <path d="M14.5455 2.72727L11.8182 0L7.27274 4.54545L2.72729 0L1.62125e-05 2.72727L7.27274 10L14.5455 2.72727Z" fill="white"/>
                            </svg>
                    </div>
                    <div class="row">
                        <div class="col"></div>
                        <div class="col text-center" style="width: 55px;
                            /* height: 106px; */
                            flex-shrink: 0;color: #FF0A0A;
                            font-size: 120px;
                            font-style: normal;
                            font-weight: 700;
                            line-height: normal;">
                            {{ $errorreport[0]->error_count }}
                        </div>
                        <div class="col"></div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-2"></div>
                        <div class="col text-center" style="width: 122px;color: #646464;
                            font-size: 16px;
                            font-style: normal;
                            font-weight: 700;
                            line-height: normal;">
                            Current Month
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="row">
                        <div class="col"></div>
                        <div class="col text Center" style="width: 103px;color: #000;
                            font-size: 14px;
                            font-style: normal;
                            font-weight: 700;
                            line-height: normal;">
                            {{ $errorreport[0]->tanggal }}
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div style = "width: 350px;
                    height: 312px;
                    flex-shrink: 0;border-radius: 10px;
                    background: #FFF;
                    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                    <div class="row">
                        <div class="col" style="color: #000;
                            /* font-family: Poppins; */
                            font-size: 16px;
                            font-style: normal;
                            font-weight: 700;
                            line-height: normal;">
                            Summary
                        </div>
                        <div class="col" style="color: #000;
                            /* font-family: Poppins; */
                            font-size: 14px;
                            font-style: normal;
                            font-weight: 700;
                            line-height: normal;">
                            {{ $summary[0]->date }} 
                        </div>
                    </div>
                    <div class="row" >
                        <div class="col" style="width: 350px;
                        height: 1px;background: #7E7E7E;margin-left:20px; margin-right:20px;"></div>
                    </div>
                    <div class="row mt-3">
                        <div style="width: 160px;
                            height: 30px;
                            flex-shrink: 0;
                            border-radius: 10px;
                            background: #00ABBD;color: #FFF;
                            font-size: 14px;
                            font-style: normal;
                            font-weight: 700;
                            line-height: normal;margin-left: auto; 
                            margin-right: 20px;padding-left:10px">
                            Microscope {{ $errorreport[0]->microscope }} <svg xmlns="http://www.w3.org/2000/svg" width="15" height="10" viewBox="0 0 15 10" fill="none">
                                <path d="M14.5455 2.72727L11.8182 0L7.27274 4.54545L2.72729 0L1.62125e-05 2.72727L7.27274 10L14.5455 2.72727Z" fill="white"/>
                                </svg>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col text-left" style="color: #646464;
                            /* font-family: Poppins; */
                            font-size: 14px;
                            font-style: normal;
                            font-weight: 700;
                            line-height: normal;
                            margin-left:8px;">
                            All Report
                        </div>
                        <div class="col" style="color: #000;
                            /* font-family: Poppins; */
                            font-size: 14px;
                            font-style: normal;
                            font-weight: 700;
                            line-height: normal;
                            text-align:right;
                            margin-right:8px;">
                           {{ $summary[0]->all_report }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="width: 310px;
                            height: 5px;background: #00ABBD; margin-left:20px; margin-right:20px">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col text-left" style="color: #646464;
                            /* font-family: Poppins; */
                            font-size: 14px;
                            font-style: normal;
                            font-weight: 700;
                            line-height: normal;
                            margin-left:8px;">
                            Approve
                        </div>
                        <div class="col" style="color: #000;
                            /* font-family: Poppins; */
                            font-size: 14px;
                            font-style: normal;
                            font-weight: 700;
                            line-height: normal;text-align:right;
                            margin-right:8px;">
                           {{ $summary[0]->approve }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="width: 310px;
                            height: 5px;background: #28C76F; margin-left:20px; margin-right:20px">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col text-left" style="color: #646464;
                            /* font-family: Poppins; */
                            font-size: 14px;
                            font-style: normal;
                            font-weight: 700;
                            line-height: normal;margin-left:8px;">
                            Reject
                        </div>
                        <div class="col" style="color: #000;
                            /* font-family: Poppins; */
                            font-size: 14px;
                            font-style: normal;
                            font-weight: 700;
                            line-height: normal;text-align:right;margin-right:8px;">
                           {{ $summary[0]->reject }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="width: 310px;
                            height: 5px;background: #FF0505;; margin-left:20px; margin-right:20px">
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <div class="row mt-5">
        <div class="col" style="width: 500px;
            height: 525px;
            flex-shrink: 0;border-radius: 10px;
            background: #FFF;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
            <div class="row mt-3">
                <div class="col" style="color: #000;
                    /* font-family: Poppins; */
                    font-size: 16px;
                    font-style: normal;
                    font-weight: 700;
                    line-height: normal;">
                    Captures
                </div>
                <div class="col">
                    <div style="width: 160px;
                        height: 30px;
                        flex-shrink: 0;
                        border-radius: 10px;
                        background: #00ABBD;color: #FFF;
                        font-size: 14px;
                        font-style: normal;
                        font-weight: 700;
                        line-height: normal;margin-left: auto; 
                        margin-right: 5px;padding-left:10px">
                         Microscope {{ $captures[0]->microscope }} <svg xmlns="http://www.w3.org/2000/svg" width="15" height="10" viewBox="0 0 15 10" fill="none">
                            <path d="M14.5455 2.72727L11.8182 0L7.27274 4.54545L2.72729 0L1.62125e-05 2.72727L7.27274 10L14.5455 2.72727Z" fill="white"/>
                            </svg>
                    </div>
                </div>
                
                <div class="col-2" style="color: #646464;
                    /* font-family: Poppins; */
                    font-size: 12px;
                    font-style: normal;
                    font-weight: 700;
                    line-height: normal;">
                    <a href="#"> View All</a>
                </div>
            </div>
           
            <div class="row mt-3">
                <div class="col" style="width: 350px;
                height: 1px;background: #7E7E7E;margin-left:10px; margin-right:10px;"></div>
            </div>

            @foreach ($captures[0]->captures as $item)
            <div class="row mt-1" style="margin-left:10px">
                <div class="col-md-2" style="width: 70px;
                    height: 69.271px;
                    flex-shrink: 0;border-radius: 10px;
                    background: url({{URL::asset('/images/image1.png')}}), lightgray 50% / cover no-repeat;
                    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                </div>
                <div class="col md-4">
                    <font style="color: #0094AC;
                    /* font-family: Poppins; */
                    font-size: 16px;
                    font-style: normal;
                    font-weight: 700;
                    line-height: normal;"> {{ $item->status }} </font>
                    <font style="color: #646464;
                    /* font-family: Poppins; */
                    font-size: 12px;
                    font-style: normal;
                    font-weight: 700;
                    line-height: normal;">
                        Batch {{ $item->batch }}
                    </font>
                    <p style="color: #646464;
                    /* font-family: Poppins; */
                    font-size: 14px;
                    font-style: normal;
                    font-weight: 700;
                    line-height: normal;"> {{ $item->region }}</p>
                    
                    <p style="color: rgba(100, 100, 100, 0.57);
                    /* font-family: Poppins; */
                    font-size: 12px;
                    font-style: normal;
                    font-weight: 700;
                    line-height: normal;">
                    {{ $item->tanggal }}
                    </p>
                </div>
            </div>
            @endforeach

        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col" style="width: 760px;
                    height: 219px;
                    flex-shrink: 0;border-radius: 10px;
                    background: #FFF;
                    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
                    margin-left:15px">
                    
                    <div class="row mt-3">
                        <div class="col" style="color: #000;
                            /* font-family: Poppins; */
                            font-size: 16px;
                            font-style: normal;
                            font-weight: 700;
                            line-height: normal;">
                            Server Status
                        </div>
                    </div>
                
                    <div class="row mt-3">
                        <div class="col" style="width: 350px;
                        height: 1px;background: #7E7E7E;margin-left:10px; margin-right:10px;"></div>
                    </div>

                    @foreach ($serverstatus as $item )
                    <div class="row mt-2">
                        <div class="col" style="color: #000;
                        /* font-family: Poppins; */
                        font-size: 14px;
                        font-style: normal;
                        font-weight: 700;
                        line-height: normal;">
                            {{ $item->server_name }}
                        </div>
                        <div class="col-md-2">
                            @if($item->status == "Online")
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                <circle cx="7.5" cy="7.5" r="6.5" fill="white" stroke="#4EF24B" stroke-width="2"/>
                            </svg> 
                            @else
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                <circle cx="7.5" cy="7.5" r="6.5" fill="white" stroke="#FF0A0A" stroke-width="2"/>
                            </svg>
                            @endif
                            {{ $item->status }}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="row mt-3">
                <div class="col" style="width: 760px;
                    height: 219px;
                    flex-shrink: 0;border-radius: 10px;
                    background: #FFF;
                    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
                    margin-left:15px">
                    
                    <div class="row mt-3">
                        <div class="col" style="color: #000;
                            /* font-family: Poppins; */
                            font-size: 16px;
                            font-style: normal;
                            font-weight: 700;
                            line-height: normal;">
                            Latest Report
                        </div>
                        <div class="col-md-2" style="color: #646464;
                            /* font-family: Poppins; */
                            font-size: 12px;
                            font-style: normal;
                            font-weight: 700;
                            line-height: normal;">
                            Showing Latest 5
                        </div>
                        <div class="col-md-2" style="color: #646464;
                            /* font-family: Poppins; */
                            font-size: 12px;
                            font-style: normal;
                            font-weight: 700;
                            line-height: normal;">
                            View All
                        </div>
                    </div>
                
                    <div class="row mt-3">
                        <div class="col" style="width: 350px;
                        height: 1px;background: #7E7E7E;margin-left:10px; margin-right:10px;"></div>
                    </div>

                    <div class="row">
                        
                        <table class="table table-striped" style="">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Kategori CPE</th>
                                <th scope="col">Date</th>
                                <th scope="col">Users</th>
                                <th scope="col">Description Report</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($latestreport as $item)
                                    @php
                                        $cpe = explode('-', $item->kategori_cpe);
                                        $cpe1 = $cpe[0];
                                        $cpe2 = $cpe[1];
                                    @endphp
                                    <tr>
                                        <th scope="row"> {{ $loop->iteration }} </th>
                                        <td> <font style="color: #FFF;
                                            /* font-family: Poppins; */
                                            font-size: 12px;
                                            font-style: normal;
                                            font-weight: 700;
                                            line-height: normal;width: 70px;
                                            height: 30px;
                                            flex-shrink: 0;border-radius: 30px;
                                            background: #F8C301;"> {{ $cpe1 }} </font> - 
                                            <font style="color: #FFF;
                                            /* font-family: Poppins; */
                                            font-size: 12px;
                                            font-style: normal;
                                            font-weight: 700;
                                            line-height: normal;
                                            width: 80px;
                                            height: 20px;
                                            flex-shrink: 0;border-radius: 40px;
                                            background: #FF0A0A;">
                                            {{ $cpe2 }}
                                            </font>
                                            
                                        </td>
                                        <td> {{ $item->date }} </td>
                                        <td> {{ $item->user }} </td>
                                        <td> {{ $item->desc }} </td>
                                    </tr>
                                @endforeach 
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5 mb-5">
        <div class="col" style="width: 1320px;
            height: 246px;
            flex-shrink: 0;border-radius: 10px;
            background: #FFF;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                    
            <div class="row mt-3">
                <div class="col" style="color: #000;
                    /* font-family: Poppins; */
                    font-size: 16px;
                    font-style: normal;
                    font-weight: 700;
                    line-height: normal;">
                    Audit Log
                </div>
            </div>
        
            <div class="row mt-3">
                <div class="col" style="width: 350px;
                height: 1px;background: #7E7E7E;margin-left:10px; margin-right:10px;"></div>
            </div>

            
            <div class="row">          
                <table class="table table-striped" style="">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Profile</th>
                        <th scope="col">Date</th>
                        <th scope="col">Users</th>
                        <th scope="col">Activity</th>
                        <th scope="col">Description Report</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($auditlog as $item)
                            <tr>
                                <th scope="row"> {{ $loop->iteration }} </th>
                                <td><div style="width: 44px;
                                    height: 44px;
                                    flex-shrink: 0;border-radius: 44px;
                                    background: url({{URL::asset('/images/23.png')}}), lightgray 50% / cover no-repeat, #D9D9D9;
                                    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                     </div></td>
                                <td> {{ $item->date }} </td>
                                <td> {{ $item->user }} </td>
                                <td> {{ $item->activity }} </td>
                                <td> {{ $item->desc }} </td>
                            </tr>
                        @endforeach 
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection