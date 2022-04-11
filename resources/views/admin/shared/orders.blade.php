<div class="col-md-12">

    <h3 class="title-5 m-b-35">Orders</h3>

    <div class="table-responsive table-responsive-data2">
        <table class="table table-data2">
            <thead>
                <tr>
                    <th>
                        <label class="au-checkbox">
                            <input type="checkbox">
                            <span class="au-checkmark"></span>
                        </label>
                    </th>
                    <th>First Name</th>
                    <th>phone</th>
                    <th>product name</th>
                    <th>Item Count</th>
                    <th>Total</th>
                    <th>Date</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse($orders as $o)
                <tr class="tr-shadow">
                    <td>
                        <label class="au-checkbox">
                            <input type="checkbox">
                            <span class="au-checkmark"></span>
                        </label>
                    </td>
                    <td>{{$o->first_name}}</td>

                    <td class="desc">{{$o->phone_number}}</td>

                    <td>
                        <span class="status--process">{{$o->products->name}}</span>
                    </td>
                    <td>
                        <span class="status--process">{{$o->item_count}}</span>
                    </td>
                    <td>
                        <span class="status--process">{{$o->grand_total}}</span>
                    </td>
                    <td>
                        <span class="status--process">{{$o->created_at->format('Y-m-d')}}</span>
                    </td>
                    <td>
                        <div class="table-data-feature">
                            <a href="{{ route('show-order', $o->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                <i class="zmdi zmdi-eye"></i>
                            </a>
                            <form action="{{ route('delete-prescription', $o->id)}}" method="POST">
                                @csrf
                                <button type="submit" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                <tr class="spacer"></tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center"> No Data !</td>
                </tr>
                @endforelse
            </tbody>

        </table>

    </div>
    <div class="d-flex justify-content-end py-4">

        {{ $orders->appends(request()->input())->links('pagination::bootstrap-4') }}

    </div>

</div>