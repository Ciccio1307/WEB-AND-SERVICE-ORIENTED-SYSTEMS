package edu.unict.biblioteca;

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

@WebServlet("/biblioteca")
public class WebApp extends HttpServlet {

    Connection connection;
    static final String CONNECTION_STRING = "jdbc:mysql://localhost:3306/Biblioteca?user=root&password=Ciccio02?";

    @Override
    public void init() {
        try {
            connection = DriverManager.getConnection(CONNECTION_STRING);
        } catch (SQLException e) {
            // TODO Auto-generated catch block
            e.printStackTrace();
        }

    }

    @Override
    public void doGet(HttpServletRequest request, HttpServletResponse response) throws IOException {
        response.setContentType("text/html");
        PrintWriter out = response.getWriter();

        out.print("<html><head><title>biblioteca</title></head>");
        out.print("<body><h1><center>BIBLIOTECA</center></h1>");
        out.println("<h2>LISTA LIBRI</h2>");

        String query = "SELECT * FROM libri";
        try (PreparedStatement stmt = connection.prepareStatement(query); ResultSet result = stmt.executeQuery(query)) {
            
            while(result.next())
            {
                out.println("<form action='/biblioteca' method='post' ");
                out.println("<input type='hidden' name='id' value=' " + result.getInt("id") + "' <br>");
                out.println("<b> Titolo : </b> "+result.getString("nome_libro"));
                out.println("<b> Pagine : </b> "+result.getInt("numero_pagine"));
                out.println ("<input type='submit' value='modifica' name='action'> ");
                out.println ("<input type='submit' value='elimina' name='action'> ");
                out.println ("<br> <br>");



            }


        } catch (SQLException e) {
            // TODO Auto-generated catch block
            e.printStackTrace();
        }

    }

    public void destroy() {
        try {
            connection.close();
        } catch (SQLException e) {
            // TODO Auto-generated catch block
            e.printStackTrace();
        }
    }
}
