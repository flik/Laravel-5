                <div class="form-group @if($errors->has('parent_id')) has-error @endif">
                       <label for="parent_id-field">Parent_id</label>
                        {!! Form::select("parent_id", $projects,0, array("class" => "form-control", "id" => "parent_id-field")) !!}
                       @if($errors->has("parent_id"))
                        <span class="help-block">{{ $errors->first("parent_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('name')) has-error @endif">
                       <label for="name-field">Name</label>
                       {!! Form::text("name", null, array("class" => "form-control", "id" => "name-field")) !!}
                       @if($errors->has("name"))
                        <span class="help-block">{{ $errors->first("name") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('description')) has-error @endif">
                       <label for="description-field">Description</label>
                       {!! Form::text("description", null, array("class" => "form-control", "id" => "description-field")) !!}
                       @if($errors->has("description"))
                        <span class="help-block">{{ $errors->first("description") }}</span>
                       @endif
                    </div>
