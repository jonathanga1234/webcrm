class ClientesController < ApplicationController



  def index
   
    all_contacto = Cliente.all
    render(json: all_contacto.to_json)
  end


  #sds


  def create

    client = Cliente.new

    client.nombre = params[:nombre]
    client.cedula = params[:cedula]
    client.pagina = params[:pagina]

    client.dirrecion = params[:dirrecion]
    client.telefono = params[:telefono]
    
    client.sector = params[:sector]
    

    if client.save
      

      render(json: client,status: 201 ,location: client)
    else

      render(json: client.errors,status: 422 )

    end
  end


  def update
    client = Cliente.find(params[:id])




    client.nombre = params[:nombre] ? params[:nombre] : client.nombre
    client.cedula = params[:cedula] ? params[:cedula] : client.cedula
    client.pagina = params[:pagina] ? params[:pagina] : client.pagina

    client.dirrecion = params[:dirrecion] ? params[:dirrecion] : client.dirrecion
    client.telefono = params[:telefono] ? params[:telefono] : client.telefono
    
    client.sector = params[:sector] ? params[:sector] : client.sector



    if client.save()



      render(json: client,status: 201 )
    else

     render(json: client.errors,status: 422 )
   end

 end
 def show


  client = Cliente.find(params[:id])
  render json: client,status: 200
end




def destroy


  client = Cliente.find(params[:id])

  if client.destroy



   head 204


 else
   
   head 422


 end
end


end









