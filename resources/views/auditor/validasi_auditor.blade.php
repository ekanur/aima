<div class="col-md-12" id="auditor_{{ $id_input }}" style="display: none;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Auditor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                        {{ $validasi_auditor or '' }}
                                        <div class="col-md-12">
                                            <p>Catatan :</p>
                                            <textarea class="form-control border-input" name="catatan{{ $id_input }}" placeholder="Catatan ..."></textarea>    
                                        </div>
                                        
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            
                        </div>

@push('script')
    <script type="text/javascript">
        $(document).ready(function(){
            var hasValidated_{{ $id_input }} = $("#setuju_{{ $id_input }}").val();

            // $("select[name *='setuju_']").attr("required", false);

            if(hasValidated_{{ $id_input }} == 0){
                $("#validasi_auditor_{{ $id_input }}").attr("disabled", false);
                $("#auditor_{{ $id_input }}").show();
                $("#auditor_{{ $id_input }} input, #auditor_{{ $id_input }} select").attr("required", true);
                $("#auditor_{{ $id_input }} input, #auditor_{{ $id_input }} select").attr("disabled", false);
            }else{
                $("#auditor_{{ $id_input }} input, #auditor_{{ $id_input }} select").attr("required", false);
                $("#auditor_{{ $id_input }} input, #auditor_{{ $id_input }} select").attr("disabled", true);
            }

            $("#setuju_{{ $id_input }}").change(function(){
                var setuju = $(this).val();

                if(setuju === '1'){
                    $("#auditor_{{ $id_input }} input, #auditor_{{ $id_input }} select").attr("required", false);
                    $("#auditor_{{ $id_input }} input, #auditor_{{ $id_input }} select").attr("disabled", true);
                    $("#auditor_{{ $id_input }}").hide();
                    $("#validasi_auditor_{{ $id_input }}").attr("disabled", true);
                }else{
                    $("#auditor_{{ $id_input }} input, #auditor_{{ $id_input }} select").attr("required", true);
                    $("#auditor_{{ $id_input }} input, #auditor_{{ $id_input }} select").attr("disabled", false);
                    $("#validasi_auditor_{{ $id_input }}").attr("disabled", false);
                    $("#auditor_{{ $id_input }}").show();

                }
            });

        });
    </script>
@endpush