@extends('layouts.template')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Your word
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active">Your word</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Info boxes -->

        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><a href="{{ route('word.create') }}" class="btn btn-sm btn-success">New</a></h3>
                <div class="box-tools">

                    {{ $words->appends(['per_page' => $per_page])->links() }}

                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-condensed">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Word</th>
                        <th>Pronounce</th>
                        <th>Translation</th>
                    </tr>
                    @forelse($words as $word)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $word->word }}</td>
                        <td>{{ $word->pronounce }}</td>
                        <td>{{ $word->translation }}</td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="4">No data.</td>
                        </tr>
                    @endforelse

                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection

@section('js')

    <script>
        $(document).ready(function(){
            $('.pagination').addClass(' pagination-sm no-margin pull-right');
        });
    </script>

@endsection

