
//   Definition for singly-linked list.
  class ListNode {
      int val;
      ListNode next;
      ListNode() {}
      ListNode(int val) { this.val = val; }
      ListNode(int val, ListNode next) { this.val = val; this.next = next; }
  }
 
class Solution {
    public ListNode deleteMiddle(ListNode head) {
        ListNode slow=head;
        ListNode fast=head;
        ListNode slowest=head;
        if(head==null || head.next==null)  
        {
            return null;
        }

        while(fast != null && fast.next!=null  )
        {
            fast=fast.next.next;
            slowest=slow;
            slow=slow.next;
        }
        slowest.next=slow.next;
        return head;

    }
}