json.extract! contacto, :id, :cliente, :nombre, :apellidos, :correo, :numero, :puesto, :created_at, :updated_at
json.url contacto_url(contacto, format: :json)
