require 'test_helper'

class ReunionesControllerTest < ActionDispatch::IntegrationTest
  setup do
    @reunione = reuniones(:one)
  end

  test "should get index" do
    get reuniones_url
    assert_response :success
  end

  test "should get new" do
    get new_reunione_url
    assert_response :success
  end

  test "should create reunione" do
    assert_difference('Reunione.count') do
      post reuniones_url, params: { reunione: { cliente: @reunione.cliente, diayhora: @reunione.diayhora, titulo: @reunione.titulo, usuario: @reunione.usuario, virtual: @reunione.virtual } }
    end

    assert_redirected_to reunione_url(Reunione.last)
  end

  test "should show reunione" do
    get reunione_url(@reunione)
    assert_response :success
  end

  test "should get edit" do
    get edit_reunione_url(@reunione)
    assert_response :success
  end

  test "should update reunione" do
    patch reunione_url(@reunione), params: { reunione: { cliente: @reunione.cliente, diayhora: @reunione.diayhora, titulo: @reunione.titulo, usuario: @reunione.usuario, virtual: @reunione.virtual } }
    assert_redirected_to reunione_url(@reunione)
  end

  test "should destroy reunione" do
    assert_difference('Reunione.count', -1) do
      delete reunione_url(@reunione)
    end

    assert_redirected_to reuniones_url
  end
end
