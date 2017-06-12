using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace ChallengeSpie
{
    public partial class Default : System.Web.UI.Page
    {
       // public object resultLabel { get; private set; }

        protected void Page_Load(object sender, EventArgs e)
        {
            if (!Page.IsPostBack)
            {
                PreviousCalendar.SelectedDate = DateTime.Now.Date;
                CalendarNew.SelectedDate = DateTime.Now.Date.AddDays(14);
                CalendarEnd.SelectedDate = DateTime.Now.Date.AddDays(21);
            }

        }

        protected void Button1_Click(object sender, EventArgs e)

        {
            TimeSpan totalDuration = CalendarEnd.SelectedDate.Subtract(CalendarNew.SelectedDate);
            double totalCost = totalDuration.TotalDays * 500.0;
            //if  more than 21 days assigned add 1000
            if (totalDuration.TotalDays>21)
            { totalCost += 1000.0; }

            resultLabel.Text = String.Format("Assigning  {0} to Assignment {1} is authorized from {2} to {3}. Budget for this is {4:C}",
                CodeName.Text,
                AssignName.Text,
                CalendarNew.SelectedDate.ToString(),
                CalendarEnd.SelectedDate.ToString(),
                totalCost);

            TimeSpan timeBetweenAssignments = CalendarNew.SelectedDate.Subtract(PreviousCalendar.SelectedDate);
            if (timeBetweenAssignments.TotalDays < 14)
            {
                resultLabel.Text = "Error: Must allow atleast two weeks between " +
                    "previous assignmnet and new assignment.";

                DateTime earliestNewAssignmentDate = PreviousCalendar.SelectedDate.AddDays(14);

                CalendarNew.SelectedDate = earliestNewAssignmentDate;
                CalendarNew.VisibleDate = earliestNewAssignmentDate;
            }
        }

        protected void Calendar1_SelectionChanged(object sender, EventArgs e)
        {

        }

        protected void Calendar2_SelectionChanged(object sender, EventArgs e)
        {

        }
    }
}