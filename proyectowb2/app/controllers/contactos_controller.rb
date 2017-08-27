class ContactosController < ApplicationController
  




  def index
    # get all clients from the database
    all_contacto = Contacto.all
    render(json: all_contacto.to_json)
  end

  def create

    contac = Contacto.new

    contac.cliente  = params[:cliente]
    contac.nombre = params[:nombre]
    contac.apellidos = params[:apellidos]
        contac.correo  = params[:correo]
            contac.numero  = params[:numero]

             contac.puesto   = params[:puesto]


   if contac.save

    render(json: contac,status: 201 ,location: contac)

else

  render(json: contac.errors,status: 422 )


  end


  end


def update
contac = Contacto.find(params[:id])

contac.cliente  = params[:cliente] ? params[:cliente] : contac.cliente
    contac.nombre = params[:nombre] ? params[:nombre] : contac.nombre
    contac.apellidos = params[:apellidos] ? params[:nombre] : contac.apellidos
        contac.correo  = params[:correo] ? params[:correo] : contac.correo
            contac.numero  = params[:numero] ? params[:numero] : contac.numero

             contac.puesto   = params[:puesto] ? params[:puesto] : contac.puesto


     
 



if contac.save()



  render(json: contac,status: 201 )
  else

 render(json: contac.errors,status: 422 )
    end

  end






    def show


contac = Contacto.find(params[:id])
render json: contac,status: 200
end



  # DELETE /contactos/1
  # DELETE /contactos/1.json
  def destroy
    @contacto.destroy
    respond_to do |format|
      format.html { redirect_to contactos_url, notice: 'Contacto was successfully destroyed.' }
      format.json { head :no_content }
    end
  end

  private
    # Use callbacks to share common setup or constraints between actions.
    def set_contacto
      @contacto = Contacto.find(params[:id])
    end

    # Never trust parameters from the scary internet, only allow the white list through.
    def contacto_params
      params.require(:contacto).permit(:cliente, :nombre, :apellidos, :correo, :numero, :puesto)
    end
end
