class TicketsController < ApplicationController


 def index
    # get all clients from the database
    all_Ticket = Ticket.all
    render(json: all_Ticket.to_json)
  end

  def create

    ticket = Ticket.new

    ticket.titulo  = params[:titulo]
    ticket.detalle   = params[:detalle]
    ticket.quien_reporto  = params[:quien_reporto]
        ticket.cliente    = params[:cliente ]
            ticket.estado   = params[:estado]

          

    


    




        if ticket.save

     render(json: ticket,status: 201 ,location: ticket)
  else

  render(json: ticket.errors,status: 422 )

end

  end








   def destroy


ticket = Ticket.find(params[:id])

if ticket.destroy



 head 204


  else
 
 head 422


 end
 end

def update
ticket = Ticket.find(params[:id])

 

    ticket.titulo  = params[:titulo] ? params[:titulo] : ticket.titulo
    ticket.detalle   = params[:detalle] ? params[:detalle] : ticket.detalle
    ticket.quien_reporto  = params[:quien_reporto] ? params[:quien_reporto] : ticket.quien_reporto
        ticket.cliente    = params[:cliente ] ? params[:cliente] : ticket.cliente
            ticket.estado   = params[:estado] ? params [:cliente] : ticket.estado




if ticket.save()



  render(json: ticket,status: 201 )
  else

 render(json: ticket.errors,status: 422 )
    end

  end

  

  def show


ticket = Ticket.find(params[:id])
render json: ticket,status: 200
end

 
  private
    # Use callbacks to share common setup or constraints between actions.
    def set_ticket
      @ticket = Ticket.find(params[:id])
    end

    # Never trust parameters from the scary internet, only allow the white list through.
    def ticket_params
      params.require(:ticket).permit(:titulo, :detalle, :quien_reporto, :cliente, :estado)
    end
end
