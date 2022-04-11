<div class="col-md-12">

    <h3 class="title-5 m-b-35">Order by Prescriptions</h3>

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
                    <th>name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>nic</th>
                    <th>date</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse($prescription as $p)
                <tr class="tr-shadow">
                    <td>
                        <label class="au-checkbox">
                            <input type="checkbox">
                            <span class="au-checkmark"></span>
                        </label>
                    </td>
                    <td>{{$p->name}}</td>
                    <td>
                        <span class="block-email">{{$p->email}}</span>
                    </td>
                    <td class="desc">{{$p->phone}}</td>

                    <td>
                        <span class="status--process">{{$p->nic}}</span>
                    </td>
                    <td>
                        <span class="status--process">{{$p->created_at->format('Y-m-d')}}</span>
                    </td>
                    <td>
                        <div class="table-data-feature">
                            <a href="{{ route('showprescription', $p->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                <i class="zmdi zmdi-eye"></i>
                            </a>
                            <form action="{{ route('delete-prescription', $p->id)}}" method="POST">
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

        {{ $prescription->appends(request()->input())->links('pagination::bootstrap-4') }}

    </div>

</div>