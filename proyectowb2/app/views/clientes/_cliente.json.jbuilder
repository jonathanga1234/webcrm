json.extract! cliente, :id, :nombre, :cedula, :pagina, :dirrecion, :telefono, :sector, :created_at, :updated_at
json.url cliente_url(cliente, format: :json)
