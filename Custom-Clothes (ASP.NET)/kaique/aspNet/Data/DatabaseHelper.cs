using MySql.Data.MySqlClient;
using System;
using System.Data;


// Está classe serve para ter uma conexão ao banco de dados (MySQL)
namespace CustomClothes.Data
{
    public class DatabaseHelper
    {
        private readonly string _connectionString;

        // Construtor que recebe a string de conexão
        public DatabaseHelper(string connectionString)
        {
            _connectionString = connectionString;
        }

        // Método privado para obter uma nova conexão MySQL
        private MySqlConnection GetConnection()
        {
            return new MySqlConnection(_connectionString);
        }
        //Try cath, não recordo se explicaram na sala, basicamente try significa tente, cath significa retorne erro.
        // Método para inserir um cliente no banco de dados
        public bool InserirCliente(string nome, string email, string senha)
        {
            using (MySqlConnection instanciaConexao = GetConnection())
            {
                try
                {
                    instanciaConexao.Open();
                    string query = "INSERT INTO tbLoginCliente (nome, email, senha) VALUES (@Nome, @Email, @Senha)";
                    using (MySqlCommand comandoSql = new MySqlCommand(query, instanciaConexao))
                    {
                        comandoSql.Parameters.AddWithValue("@Nome", nome.ToLower());
                        comandoSql.Parameters.AddWithValue("@Email", email.ToLower());
                        comandoSql.Parameters.AddWithValue("@Senha", senha);
                        comandoSql.ExecuteNonQuery();
                    }
                    return true;
                }
                catch (Exception erru)
                {
                    // Lidar com erros
                    Console.WriteLine(erru.Message);
                    return false;
                }
            }
        }


        // Método para obter todos os clientes do banco de dados
        public DataTable VisualizarClienteLogin()
        {
            using (MySqlConnection conn = GetConnection())
            {
                DataTable dataTable = new DataTable();
                try
                {
                    conn.Open();
                    string query = "SELECT * FROM tbLoginCliente";
                    //MySqlCommand é a classe da biblioteca My.SQL.Data representa a conexão
                    using (MySqlCommand cmd = new MySqlCommand(query, conn))
                    {
                        using (MySqlDataAdapter adapter = new MySqlDataAdapter(cmd))
                        {
                            adapter.Fill(dataTable);
                        }
                    }
                }
                catch (Exception ex)
                {
                    // Lidar com erros
                    Console.WriteLine(ex.Message);
                }
                return dataTable;
            }
        }
    }
}
