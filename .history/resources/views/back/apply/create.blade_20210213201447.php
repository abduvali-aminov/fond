@extends('voyager::master')
@section('content')

    <div class="container">
        <div class="text-center">
            <h1>Create Apply</h1>
        </div>
        <div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <br />
            @endif
        </div>

        <form method = "POST" action= "{{ route('apply-store') }}" enctype="multipart/form-data">
            @csrf
            <div>
                <div class="form-row">
                    <div class="form-group input-group-lg col-md-7">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                    </div>
                    <div class="form-group input-group-lg col-md-5">
                        <label for="phone">Phone </label>
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group input-group-lg col-md-6">
                        <label for="cause_id">Cause</label>
                        <select name="cause_id" id = "cause_id" class="form-control">
                            @foreach($cause as $index)
                                <option value="{{ $index->id }}">{{ $index->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group input-group-lg col-md-4">
                        <label for="summ">Summ</label>
                        <input type="text" name="required_amount" class="form-control" id="summ" placeholder="Summ">
                    </div>
                    <div class="form-group input-group-lg col-md-2">
                        <label for="summ_type">SummT</label>
                        <select name="summa_id" class="form-control" id="summ_type">
                            @foreach($summ_type as $index)
                                <option value="{{ $index->id }}">{{ $index->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group input-group-lg col-md-8">
                        <label for="address">Address </label>
                        <input class="form-control" name="address" id="description" ></input>
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="2"></textarea>
                    </div>
                    <div class="form-group input-group-lg col-md-4">
                        <label for="photo_1">Photo1</label>
                        <input type="file" name="photo_1" class="form-control-file" id="photo_1">
                        <label for="photo_2">Photo2</label>
                        <input type="file" name="photo_2" class="form-control-file" id="photo_2">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <a href="{{ route('voyager.applies.index') }}" style="width: 150px" type="submit" class="btn btn-warning ">Cancel</a>
                <button style="width: 150px" type="submit" class="btn btn-primary ">Save</button>
            </div>

        </form>

    </div>

@endsection
Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime corporis dolores eligendi nisi, et aspernatur sed commodi ipsum sint quod doloribus dolorem ullam provident corrupti unde optio illum nostrum. Maxime eum consequuntur quam cumque neque aperiam pariatur repudiandae temporibus blanditiis ea dolor molestiae, laborum quod consequatur eos velit unde quidem rerum sequi et, doloremque corporis! Officia laboriosam corporis expedita id accusamus, a possimus! Voluptatibus possimus explicabo facilis laborum sunt? Asperiores iure harum expedita natus nostrum, deleniti provident. Natus voluptas repellat minima obcaecati perferendis quaerat voluptatem neque. Mollitia pariatur praesentium nobis voluptas. Esse aspernatur corporis distinctio maiores temporibus voluptates? Amet dignissimos enim culpa omnis consectetur dolore molestias quae repudiandae, fugit, magni provident aliquam esse eius corporis iusto quisquam saepe tenetur? Possimus sunt porro exercitationem. Quis harum voluptatem quod atque, pariatur repellat, amet sint architecto aliquam, deserunt quasi tempora corporis magni corrupti veritatis quam soluta obcaecati maxime reiciendis eos quaerat! Iste iure eligendi aperiam alias quia quasi ipsam. Voluptatem iure quos obcaecati debitis fugit at accusantium. Eos, sapiente delectus iusto eaque accusamus suscipit aliquid consectetur cum magnam quasi deserunt culpa autem quia quo blanditiis sunt expedita maxime corporis a repellendus earum vero nostrum. Pariatur autem temporibus quisquam voluptate aliquam aspernatur architecto sit impedit dolorum modi iure ullam voluptates repudiandae non, ipsa atque natus odit harum veniam nemo? Provident veritatis ullam eligendi recusandae.
