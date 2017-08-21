json.extract! ticket, :id, :titulo, :detalle, :quien_reporto, :cliente, :estado, :created_at, :updated_at
json.url ticket_url(ticket, format: :json)
