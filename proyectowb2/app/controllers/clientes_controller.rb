class ClientesController < ApplicationController








  def create

    client = Cliente.new

    client.nombre = params[:nombre]
    client.cedula = params[:cedula]
    client.pagina = params[:pagina]

     client.dirrecion = params[:dirrecion]
      client.telefono = params[:telefono]
     
  client.sector = params[:sector]
    client.save
  end
end









