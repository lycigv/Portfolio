<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Default.aspx.cs" Inherits="ChallengeSpie.Default" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <style type="text/css">
        .auto-style1 {
            width: 191px;
            height: 205px;
        }
        #form1 {
            height: 382px;
        }
    </style>
</head>
<body>
    <form id="form1" runat="server">
    <div style="width: 191px; height: 157px; margin-left: 0px">
    
        <img alt="" class="auto-style1" src="circleb.png" /><br />
        <h2 style="width: 1055px">Spy Assignment Form!</h2>
        <p style="width: 252px">
            Spy Code Name:<asp:TextBox ID="CodeName" runat="server"></asp:TextBox>
        </p>
        <p style="width: 378px">
            New Assignment Name:<asp:TextBox ID="AssignName" runat="server" Height="22px"></asp:TextBox>
        </p>
        <p style="width: 390px">
            End Date of Previous Assignment:</p>
        <asp:Calendar ID="PreviousCalendar" runat="server" OnSelectionChanged="Calendar1_SelectionChanged"></asp:Calendar>
        <p style="width: 390px">
            Start Date of New Assignment:</p>
        <asp:Calendar ID="CalendarNew" runat="server" OnSelectionChanged="Calendar2_SelectionChanged"></asp:Calendar>
        <p style="width: 252px">
            Projected End Date of New Assignment:</p>
        <p style="width: 252px">
            <asp:Calendar ID="CalendarEnd" runat="server"></asp:Calendar>
            <asp:Button ID="AssignButton" runat="server" OnClick="Button1_Click" Text="AssignButton" />
        </p>
        <p style="width: 252px">
            Assign Spy</p>
        <p style="width: 1177px">
            <asp:Label ID="resultLabel" runat="server" Text="resultLabel"></asp:Label>
        </p>
    
    </div>
    </form>
</body>
</html>
