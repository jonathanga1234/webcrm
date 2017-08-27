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


    if reunion.save
  

 
    render(json: reunion,status: 201 ,location: reunion)
  else

  render(json: reunion.errors,status: 422 )

end


    
  end
 def show


reunion = Reunione.find(params[:id])
render json: reunion,status: 200
end

 def destroy


reunion = Reunione.find(params[:id])

if reunion.destroy



 head 204


  else
 
 head 422


 end
 end

def update
reunion = Reunione.find(params[:id])



      reunion.titulo  = params[:titulo] ? params[:nombre] : reunion.titulo
    reunion.diayhora  = params[:diayhora] ? params[:diayhora] : reunion.diayhora
    reunion.usuario  = params[:usuario] ? params[:usuario] : reunion.usuario
        reunion.virtual   = params[:virtual] ? params[:virtual] : reunion.virtual
            reunion.cliente   = params[:cliente]



if reunion.save()



  render(json: reunion,status: 201 )
  else

 render(json: reunion.errors,status: 422 )
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
