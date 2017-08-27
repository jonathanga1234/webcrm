class ClientesController < ApplicationController



  def index
   
    all_contacto = Cliente.all
    render(json: all_contacto.to_json)
  end





  def create

    client = Cliente.new

    client.nombre = params[:nombre]
    client.cedula = params[:cedula]
    client.pagina = params[:pagina]

     client.dirrecion = params[:dirrecion]
      client.telefono = params[:telefono]
     
     client.sector = params[:sector]
    client.save

    render(json: client,status: 201 ,location: client)
  end



  def show


client = Cliente.find(params[:id])
render json: client,status: 200
end



end









