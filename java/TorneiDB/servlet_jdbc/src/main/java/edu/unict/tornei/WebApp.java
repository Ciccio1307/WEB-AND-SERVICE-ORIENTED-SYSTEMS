
package edu.unict.tornei;

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.HttpServlet;
import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpServletResponse;
@WebServlet("/tornei")
public class WebApp extends  HttpServlet{
    Connection connection;
     static final String CONNEC_STRING="jdbc:mysql://localhost:3306/tornei?user=root&password=Ciccio02?";


    @Override
    public void init()
{
    try {
        connection=DriverManager.getConnection(CONNEC_STRING);
    } catch (SQLException e) {
        // TODO Auto-generated catch block
        e.printStackTrace();
    }
}


    @Override
    public void doGet(HttpServletRequest request, HttpServletResponse response) throws IOException
{

    response.setContentType("text/html");
PrintWriter out = response.getWriter();
String query ="SELECT * FROM tournaments";
out.println("""
        <html>
        <head><title>torneiEuropei</title></head>
        <body>
        <h1><center>EUROPEI TORNEI</center></h1>
        <h2>LISTA EUROPEI</h2>
        """);   

        try {
            PreparedStatement stmt = connection.prepareStatement(query);
            ResultSet result = stmt.executeQuery();

            
            while(result.next())
            {
                out.println("<br> <br>");
                out.println("<form action='/tornei' method='post'> ");
                out.println("<input type='hidden' name='id' value='"+result.getInt("id")+"' >");
                out.println("<b>Name : </b>"+result.getString("name"));
                out.println("<img width=100px height=100pc src="+result.getString("logo")+">");
                out.println("<b>Champion : </b>"+result.getString("champion"));
                out.println("<b>Year : </b>"+result.getInt("year"));
                out.println("<input type='submit' value='elimina' name='action'>");
                out.println("<input type='submit' value='modifica' name='action'>");
                out.println("</form> ");





            }
        } catch (SQLException e) {
            // TODO Auto-generated catch block
            e.printStackTrace();
        }
        out.println("<br> <br>");

        out.println("<h3>INSERISCI UN NUOVO TORNEO <h3>");
        out.println("<form action='/tornei' method='post'> ");
        out.println("<b> Name : </b> <input type='text' name='name'>");
        out.println(" <br>");

        out.println("<b> Champion : </b> <input type='text' name='champ'>");
        out.println(" <br>");

        out.println("<b> Logo  : </b> <input type='text' name='logo' placeholder='please insert the source of the image'>");
        out.println(" <br>");

        out.println("<b> Year : </b> <input type='number' name='year'>");
        out.println(" <br>");

        out.println("<input type='submit' value='Invia' name='action'>");

        out.println("</form> ");

}



@Override
public void doPost(HttpServletRequest request, HttpServletResponse response) throws IOException
{

response.setContentType("text/html");
PrintWriter out = response.getWriter();

String scelta = request.getParameter("action");

if(scelta.equals("Invia"))
{


    String name = request.getParameter("name");
    String logo = request.getParameter("logo");
    String champion = request.getParameter("champion");
    int year = Integer.parseInt(request.getParameter("year"));



    String query = "INSERT INTO tournaments (name,logo,champion,year) VALUES (?,?,?,?) ";
    
    try {
        PreparedStatement stmt = connection.prepareStatement(query);

        stmt.setString(1, name);
        stmt.setString(2, logo);
        stmt.setString(3, champion);
        stmt.setInt(4, year);
        int rows = stmt.executeUpdate();
        out.println("UPDATE ROWS COMPLETE , NUMBER OF ROWS : "+rows);

    } catch (SQLException e) {
        // TODO Auto-generated catch block
        e.printStackTrace();
    }




}


if(scelta.equals("elimina"))
{
    int id = Integer.parseInt( request.getParameter("id"));

    String query = "DELETE FROM tournaments WHERE id="+id;

    try {
        PreparedStatement stmt = connection.prepareStatement(query);
        int rows = stmt.executeUpdate();
        out.println("DELETE ROWS COMPLETE , NUMBER OF ROWS : "+rows);

    }catch (SQLException e) {
        // TODO Auto-generated catch block
        e.printStackTrace();
    }
}
if(scelta.equals("modifica"))
{
    int id = Integer.parseInt( request.getParameter("id"));

    String query = "SELECT * FROM tournaments WHERE id="+id;

    try {
        PreparedStatement stmt = connection.prepareStatement(query);
        ResultSet result = stmt.executeQuery();

            
            while(result.next())
            {
        out.println("<form action='/tornei' method='post' >");
        out.println("<input type='hidden' name='id'  value='"+result.getInt("id")+"' >");
        out.println("<input type='text' name='name'  value='"+result.getString("name") +"' >");
        out.println("<input type='text' name='champion'  value='"+result.getString("champion") +"' >");
        out.println("<input type='text' name='logo'  value='"+result.getString("logo") +"' >");
        out.println("<input type='text' name='year'  value='"+result.getInt("year")+"' >");
        out.println("<input type='submit' value='update' name='action'>");
        out.println("</form >");


            }
    }catch (SQLException e) {
        // TODO Auto-generated catch block
        e.printStackTrace();
    }
}

if(scelta.equals("update"))
{

    int id = Integer.parseInt( request.getParameter("id"));
    String name = request.getParameter("name");
    String logo = request.getParameter("logo");
    String champion = request.getParameter("champion");
    int year = Integer.parseInt(request.getParameter("year"));

    String query = "UPDATE  tournaments SET logo=?,champion=?,year=?,name=?  WHERE id=?";

    try {
        PreparedStatement stmt = connection.prepareStatement(query);

        stmt.setString(1, logo);
        stmt.setString(2, champion);
        stmt.setInt(3, year);
        stmt.setString(4, name);
        stmt.setInt(5, id);
        int rows = stmt.executeUpdate();
        out.println("MODIFY ROWS COMPLETE , NUMBER OF ROWS : "+rows);
        
    }catch (SQLException e) {
        // TODO Auto-generated catch block
        e.printStackTrace();
    }



}
out.println("<a href='/tornei'> RETURN  TO HOME </a> ");
}
}
