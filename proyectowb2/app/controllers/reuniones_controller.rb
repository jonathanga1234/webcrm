class ReunionesController < ApplicationController



 def index
    # get all clients from the database
    all_Reunione = Reunione.all
    render(json: all_Reunione.to_json)
  end

  def create

    reunion = Reunione.new

    reunion.titulo  = params[:titulo]
    reunion.diayhora  = params[:diayhora]
    reunion.usuario  = params[:usuario]
        reunion.virtual   = params[:virtual]
            reunion.cliente   = params[:cliente]

          

    reunion.save
  end




  # PATCH/PUT /reuniones/1
  # PATCH/PUT /reuniones/1.json
  def update
    respond_to do |format|
      if @reunione.update(reunione_params)
        format.html { redirect_to @reunione, notice: 'Reunione was successfully updated.' }
        format.json { render :show, status: :ok, location: @reunione }
      else
        format.html { render :edit }
        format.json { render json: @reunione.errors, status: :unprocessable_entity }
      end
    end
  end

  # DELETE /reuniones/1
  # DELETE /reuniones/1.json
  def destroy
    @reunione.destroy
    respond_to do |format|
      format.html { redirect_to reuniones_url, notice: 'Reunione was successfully destroyed.' }
      format.json { head :no_content }
    end
  end

  private
    # Use callbacks to share common setup or constraints between actions.
    def set_reunione
      @reunione = Reunione.find(params[:id])
    end

    # Never trust parameters from the scary internet, only allow the white list through.
    def reunione_params
      params.require(:reunione).permit(:titulo, :diayhora, :usuario, :virtual, :cliente)
    end
end
